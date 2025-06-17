#!/bin/bash

# Setup Script for webportal-Arga with Nginx
# This script sets up a PHP native project with Nginx (no Apache)

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Configuration variables
PROJECT_NAME="webportal-Arga"
SOURCE_DIR="/mnt/c/xampp/htdocs/webportal-Arga"
TARGET_DIR="/var/www/webportal-Arga"
NGINX_CONFIG_FILE="/etc/nginx/sites-available/webportal-arga"
DOMAIN_NAME="pkl.argabumi.id"  # Change this to your actual domain
EMAIL="b2bsetaracommodity@gmail.com"  # Change this to your email for SSL certificate
PHP_VERSION="8.2"  # Adjust based on your system
USE_SSL=true  # Set to false if you don't want SSL

# Server connection settings - UPDATE THESE!
SERVER_HOST="argabumi.id"  # Change to your server IP
SERVER_USER="miko"  # Change to your server username
SERVER_PORT="22"  # SSH port
SSH_KEY="mikomiko"  # Optional: path to SSH private key file

# Remote execution mode
REMOTE_MODE=true  # Set to false to run directly on server

echo -e "${BLUE}========================================${NC}"
echo -e "${BLUE}  Setup webportal-Arga with Nginx${NC}"
echo -e "${BLUE}========================================${NC}"

if [ "$REMOTE_MODE" = true ]; then
    echo -e "${GREEN}Running in REMOTE MODE${NC}"
    echo -e "This script will:"
    echo -e "1. Upload project files from local to server"
    echo -e "2. Execute setup commands on remote server"
    echo -e "3. Configure Nginx + PHP + SSL automatically"
    echo -e ""
    echo -e "Local project: ${GREEN}$SOURCE_DIR${NC}"
    echo -e "Server: ${GREEN}$SERVER_USER@$SERVER_HOST${NC}"
    echo -e "Target: ${GREEN}$TARGET_DIR${NC}"
    echo -e ""
else
    echo -e "${YELLOW}Running in LOCAL MODE${NC}"
    echo -e "This script will run directly on this server"
fi

# Function to print status messages
print_status() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# SSH command wrapper
ssh_exec() {
    local cmd="$1"
    if [ -n "$SSH_KEY" ]; then
        ssh -i "$SSH_KEY" -p "$SERVER_PORT" "$SERVER_USER@$SERVER_HOST" "$cmd"
    else
        ssh -p "$SERVER_PORT" "$SERVER_USER@$SERVER_HOST" "$cmd"
    fi
}

# Upload files to server
upload_files() {
    print_status "Uploading project files to server..."
    
    if [ ! -d "$SOURCE_DIR" ]; then
        print_error "Source directory $SOURCE_DIR not found!"
        exit 1
    fi
    
    # Create target directory on server with sudo
    ssh_exec "sudo mkdir -p $TARGET_DIR"
    
    # Upload files to user's home directory first, then move with sudo
    local temp_dir="/tmp/webportal-upload"
    ssh_exec "mkdir -p $temp_dir"
    
    # Upload files using rsync to temp directory
    if [ -n "$SSH_KEY" ]; then
        rsync -avz -e "ssh -i $SSH_KEY -p $SERVER_PORT" "$SOURCE_DIR/" "$SERVER_USER@$SERVER_HOST:$temp_dir/"
    else
        rsync -avz -e "ssh -p $SERVER_PORT" "$SOURCE_DIR/" "$SERVER_USER@$SERVER_HOST:$temp_dir/"
    fi
    
    if [ $? -eq 0 ]; then
        # Move files from temp to target with sudo
        ssh_exec "sudo cp -r $temp_dir/* $TARGET_DIR/ && rm -rf $temp_dir"
        print_status "Files uploaded successfully"
    else
        print_error "File upload failed"
        exit 1
    fi
}

# Test SSH connection
test_connection() {
    print_status "Testing SSH connection to server..."
    
    if ssh_exec "echo 'Connection successful'" >/dev/null 2>&1; then
        print_status "SSH connection established"
    else
        print_error "Cannot connect to server. Please check:"
        print_error "- Server IP: $SERVER_HOST"
        print_error "- Username: $SERVER_USER"
        print_error "- SSH port: $SERVER_PORT"
        print_error "- SSH key: $SSH_KEY"
        exit 1
    fi
}

# Check if running as root (local mode only)
check_root() {
    if [ "$REMOTE_MODE" = false ] && [[ $EUID -ne 0 ]]; then
        print_error "This script must be run as root (use sudo)"
        exit 1
    fi
}

# Execute remote setup
remote_setup() {
    print_status "Executing setup commands on remote server..."
    
    # Create remote setup script
    local remote_script="/tmp/webportal-setup-remote.sh"
    
    # Generate the remote setup script content
    cat > "$remote_script" << 'REMOTE_SCRIPT_EOF'
#!/bin/bash

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

# Configuration from main script
PROJECT_NAME="webportal-Arga"
TARGET_DIR="/var/www/webportal-Arga"
NGINX_CONFIG_FILE="/etc/nginx/sites-available/webportal-arga"
DOMAIN_NAME="pkl.argabumi.id"
EMAIL="b2bsetaracommodity@gmail.com"
PHP_VERSION="8.2"
USE_SSL=true

print_status() { echo -e "${GREEN}[INFO]${NC} $1"; }
print_warning() { echo -e "${YELLOW}[WARNING]${NC} $1"; }
print_error() { echo -e "${RED}[ERROR]${NC} $1"; }

# Update system
print_status "Updating system packages..."
apt update && apt upgrade -y

# Install packages
print_status "Installing Nginx, PHP-FPM, and Certbot..."
apt install -y nginx php${PHP_VERSION}-fpm php${PHP_VERSION}-mysql php${PHP_VERSION}-curl php${PHP_VERSION}-gd php${PHP_VERSION}-mbstring php${PHP_VERSION}-xml php${PHP_VERSION}-zip php${PHP_VERSION}-intl php${PHP_VERSION}-bcmath certbot python3-certbot-nginx

# Create directories
mkdir -p /var/www /etc/nginx/sites-available /etc/nginx/sites-enabled /etc/nginx/snippets /var/log/nginx /var/run/php /etc/ssl/certs /etc/ssl/private /var/www/html

# Create fastcgi-php.conf
cat > /etc/nginx/snippets/fastcgi-php.conf << 'EOF'
fastcgi_split_path_info ^(.+?\.php)(/.*)$;
try_files $fastcgi_script_name =404;
set $path_info $fastcgi_path_info;
fastcgi_param PATH_INFO $path_info;
fastcgi_index index.php;
include fastcgi.conf;
EOF

# Configure PHP-FPM
systemctl enable php${PHP_VERSION}-fpm
systemctl start php${PHP_VERSION}-fpm

# Create Nginx configuration
cat > "$NGINX_CONFIG_FILE" << EOF
server {
    listen 80;
    server_name $DOMAIN_NAME www.$DOMAIN_NAME;
    
    location /.well-known/acme-challenge/ {
        root /var/www/html;
    }
    
    location / {
        return 301 https://\$server_name\$request_uri;
    }
}

server {
    listen 443 ssl http2;
    server_name $DOMAIN_NAME www.$DOMAIN_NAME;
    root $TARGET_DIR;
    index index.php index.html index.htm;

    ssl_certificate /etc/ssl/certs/ssl-cert-snakeoil.pem;
    ssl_certificate_key /etc/ssl/private/ssl-cert-snakeoil.key;
    
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_prefer_server_ciphers off;
    ssl_session_cache shared:SSL:10m;

    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;

    location / {
        try_files \$uri \$uri/ @fallback;
    }

    location @fallback {
        rewrite ^.*$ /index.php last;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php${PHP_VERSION}-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~* \.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    location ~ /\. { deny all; }
    location ~ /(sistem|config|\.htaccess|\.env) { deny all; }
    location ~* \.(htaccess|htpasswd|ini|log|conf)$ { deny all; }

    access_log /var/log/nginx/webportal-arga_access.log;
    error_log /var/log/nginx/webportal-arga_error.log;
}
EOF

# Enable site
ln -sf "$NGINX_CONFIG_FILE" /etc/nginx/sites-enabled/
rm -f /etc/nginx/sites-enabled/default

# Set permissions
chown -R www-data:www-data "$TARGET_DIR"
chmod -R 755 "$TARGET_DIR"
find "$TARGET_DIR" -type f -exec chmod 644 {} \;

# Start services
systemctl enable nginx
systemctl start nginx
systemctl reload nginx

# Setup SSL
print_status "Setting up SSL certificate..."
certbot --nginx -d "$DOMAIN_NAME" -d "www.$DOMAIN_NAME" --email "$EMAIL" --agree-tos --non-interactive --redirect

# Setup cron for renewal
(crontab -l 2>/dev/null; echo "0 12 * * * /usr/bin/certbot renew --quiet") | crontab -

print_status "Setup completed successfully!"
REMOTE_SCRIPT_EOF

    # Upload and execute remote script
    if [ -n "$SSH_KEY" ]; then
        scp -i "$SSH_KEY" -P "$SERVER_PORT" "$remote_script" "$SERVER_USER@$SERVER_HOST:/tmp/"
    else
        scp -P "$SERVER_PORT" "$remote_script" "$SERVER_USER@$SERVER_HOST:/tmp/"
    fi
    
    # Execute remote script
    ssh_exec "chmod +x /tmp/webportal-setup-remote.sh && sudo /tmp/webportal-setup-remote.sh"
    
    # Clean up
    rm "$remote_script"
    ssh_exec "rm -f /tmp/webportal-setup-remote.sh"
    
    print_status "Remote setup completed"
}

# Create required directories
create_directories() {
    print_status "Creating required directories..."
    
    # Create web root directory
    mkdir -p /var/www
    mkdir -p "$TARGET_DIR"
    
    # Create Nginx directories if they don't exist
    mkdir -p /etc/nginx/sites-available
    mkdir -p /etc/nginx/sites-enabled
    mkdir -p /etc/nginx/snippets
    
    # Create log directories
    mkdir -p /var/log/nginx
    
    # Create PHP-FPM directories
    mkdir -p /var/run/php
    
    # Create SSL directories
    mkdir -p /etc/ssl/certs
    mkdir -p /etc/ssl/private
    
    # Create Certbot webroot directory
    mkdir -p /var/www/html
    
    print_status "Required directories created"
}

# Update system packages
update_system() {
    print_status "Updating system packages..."
    apt update && apt upgrade -y
}

# Install required packages
install_packages() {
    print_status "Installing Nginx, PHP-FPM, and Certbot..."
    apt install -y nginx php${PHP_VERSION}-fpm php${PHP_VERSION}-mysql php${PHP_VERSION}-curl php${PHP_VERSION}-gd php${PHP_VERSION}-mbstring php${PHP_VERSION}-xml php${PHP_VERSION}-zip php${PHP_VERSION}-intl php${PHP_VERSION}-bcmath
    
    # Install Certbot for SSL certificates
    if [ "$USE_SSL" = true ]; then
        apt install -y certbot python3-certbot-nginx
        print_status "Certbot installed successfully"
    fi
}

# Setup project files (assumes files are already uploaded)
setup_project_files() {
    print_status "Setting up project files..."
    
    # Ensure target directory exists
    mkdir -p "$TARGET_DIR"
    
    # Check if project files exist in target directory
    if [ "$(ls -A $TARGET_DIR 2>/dev/null)" ]; then
        print_status "Project files found in $TARGET_DIR"
        
        # Check for index.php
        if [ -f "$TARGET_DIR/index.php" ]; then
            print_status "index.php found - project appears to be uploaded correctly"
        else
            print_warning "index.php not found in $TARGET_DIR"
            print_warning "Please ensure all project files are uploaded correctly"
        fi
        
        # Verify expected directories exist
        expected_dirs=("arga" "assets" "css" "Dokumen" "image" "js" "sistem")
        missing_dirs=()
        
        for dir in "${expected_dirs[@]}"; do
            if [ ! -d "$TARGET_DIR/$dir" ]; then
                missing_dirs+=("$dir")
            fi
        done
        
        if [ ${#missing_dirs[@]} -gt 0 ]; then
            print_warning "Some expected directories are missing: ${missing_dirs[*]}"
            print_warning "Creating missing directories..."
            for dir in "${missing_dirs[@]}"; do
                mkdir -p "$TARGET_DIR/$dir"
            done
        fi
        
    else
        print_error "No files found in $TARGET_DIR"
        print_error "Please upload your project files first!"
        print_status "Creating basic project structure as fallback..."
        
        # Create basic directory structure
        mkdir -p "$TARGET_DIR"/{arga,assets,css,Dokumen,image,js,sistem}
        
        # Create a basic index.php
        cat > "$TARGET_DIR/index.php" << 'EOF'
<?php
echo "<h1>webportal-Arga Server Setup Complete</h1>";
echo "<p>Server configuration successful!</p>";
echo "<p><strong>Next steps:</strong></p>";
echo "<ul>";
echo "<li>Upload your project files to: " . __DIR__ . "</li>";
echo "<li>Ensure all files have proper permissions</li>";
echo "<li>Test your application</li>";
echo "</ul>";
echo "<hr>";
echo "<h2>Server Information:</h2>";
phpinfo();
?>
EOF
        print_warning "Created placeholder index.php - please upload your actual project files"
    fi
    
    # Ensure www-data user exists
    if ! id "www-data" &>/dev/null; then
        print_status "Creating www-data user..."
        useradd -r -s /bin/false www-data
    fi
    
    # Set proper permissions
    chown -R www-data:www-data "$TARGET_DIR"
    chmod -R 755 "$TARGET_DIR"
    find "$TARGET_DIR" -type f -exec chmod 644 {} \;
    find "$TARGET_DIR" -type d -exec chmod 755 {} \;
    
    print_status "Project files setup completed at $TARGET_DIR"
}

# Configure PHP-FPM
configure_php_fpm() {
    print_status "Configuring PHP-FPM..."
    
    # Enable and start PHP-FPM
    systemctl enable php${PHP_VERSION}-fpm
    systemctl start php${PHP_VERSION}-fpm
    
    # Check PHP-FPM status
    if systemctl is-active --quiet php${PHP_VERSION}-fpm; then
        print_status "PHP-FPM is running successfully"
    else
        print_error "PHP-FPM failed to start"
        exit 1
    fi
}

# Create required Nginx configuration files
create_nginx_snippets() {
    print_status "Creating Nginx configuration snippets..."
    
    # Create fastcgi-php.conf if it doesn't exist
    if [ ! -f /etc/nginx/snippets/fastcgi-php.conf ]; then
        cat > /etc/nginx/snippets/fastcgi-php.conf << 'EOF'
# regex to split $uri to $fastcgi_script_name and $fastcgi_path
fastcgi_split_path_info ^(.+?\.php)(/.*)$;

# Check that the PHP script exists before passing it
try_files $fastcgi_script_name =404;

# Bypass the fact that try_files resets $fastcgi_path_info
# see: http://trac.nginx.org/nginx/ticket/321
set $path_info $fastcgi_path_info;
fastcgi_param PATH_INFO $path_info;

fastcgi_index index.php;
include fastcgi.conf;
EOF
        print_status "Created fastcgi-php.conf snippet"
    fi
    
    # Ensure fastcgi.conf exists
    if [ ! -f /etc/nginx/fastcgi.conf ]; then
        cat > /etc/nginx/fastcgi.conf << 'EOF'
fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
fastcgi_param  QUERY_STRING       $query_string;
fastcgi_param  REQUEST_METHOD     $request_method;
fastcgi_param  CONTENT_TYPE       $content_type;
fastcgi_param  CONTENT_LENGTH     $content_length;

fastcgi_param  SCRIPT_NAME        $fastcgi_script_name;
fastcgi_param  REQUEST_URI        $request_uri;
fastcgi_param  DOCUMENT_URI       $document_uri;
fastcgi_param  DOCUMENT_ROOT      $document_root;
fastcgi_param  SERVER_PROTOCOL    $server_protocol;
fastcgi_param  REQUEST_SCHEME     $scheme;
fastcgi_param  HTTPS              $https if_not_empty;

fastcgi_param  GATEWAY_INTERFACE  CGI/1.1;
fastcgi_param  SERVER_SOFTWARE    nginx/$nginx_version;

fastcgi_param  REMOTE_ADDR        $remote_addr;
fastcgi_param  REMOTE_PORT        $remote_port;
fastcgi_param  SERVER_ADDR        $server_addr;
fastcgi_param  SERVER_PORT        $server_port;
fastcgi_param  SERVER_NAME        $server_name;

# PHP only, required if PHP was built with --enable-force-cgi-redirect
fastcgi_param  REDIRECT_STATUS    200;
EOF
        print_status "Created fastcgi.conf"
    fi
}

# Create Nginx configuration
create_nginx_config() {
    print_status "Creating Nginx configuration..."
    
    if [ "$USE_SSL" = true ]; then
        # Create initial HTTP configuration for Certbot
        cat > "$NGINX_CONFIG_FILE" << EOF
server {
    listen 80;
    server_name $DOMAIN_NAME www.$DOMAIN_NAME;
    
    # Allow Certbot validation
    location /.well-known/acme-challenge/ {
        root /var/www/html;
    }
    
    # Redirect all other HTTP traffic to HTTPS
    location / {
        return 301 https://\$server_name\$request_uri;
    }
}

server {
    listen 443 ssl http2;
    server_name $DOMAIN_NAME www.$DOMAIN_NAME;
    root $TARGET_DIR;
    index index.php index.html index.htm;

    # SSL Configuration (will be updated by Certbot)
    ssl_certificate /etc/ssl/certs/ssl-cert-snakeoil.pem;
    ssl_certificate_key /etc/ssl/private/ssl-cert-snakeoil.key;
    
    # Modern SSL configuration
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_session_cache shared:SSL:10m;
    ssl_session_timeout 10m;

    # Security headers
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;

    # Main location block
    location / {
        try_files \$uri \$uri/ @fallback;
    }

    # Fallback for missing files - route to index.php
    location @fallback {
        rewrite ^.*$ /index.php last;
    }

    # Handle PHP files
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php${PHP_VERSION}-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    # Handle static assets
    location ~* \.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Deny access to sensitive files
    location ~ /\. {
        deny all;
    }

    location ~ /(sistem|config|\.htaccess|\.env) {
        deny all;
    }

    # Security: deny access to specific file types
    location ~* \.(htaccess|htpasswd|ini|log|conf)$ {
        deny all;
    }

    # Logging
    access_log /var/log/nginx/webportal-arga_access.log;
    error_log /var/log/nginx/webportal-arga_error.log;
}
EOF
    else
        # HTTP only configuration
        cat > "$NGINX_CONFIG_FILE" << EOF
server {
    listen 80;
    server_name $DOMAIN_NAME www.$DOMAIN_NAME;
    root $TARGET_DIR;
    index index.php index.html index.htm;

    # Security headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;

    # Main location block
    location / {
        try_files \$uri \$uri/ @fallback;
    }

    # Fallback for missing files - route to index.php
    location @fallback {
        rewrite ^.*$ /index.php last;
    }

    # Handle PHP files
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php${PHP_VERSION}-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    # Handle static assets
    location ~* \.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        try_files \$uri =404;
    }

    # Deny access to sensitive files
    location ~ /\. {
        deny all;
    }

    location ~ /(sistem|config|\.htaccess|\.env) {
        deny all;
    }

    # Security: deny access to specific file types
    location ~* \.(htaccess|htpasswd|ini|log|conf)$ {
        deny all;
    }

    # Logging
    access_log /var/log/nginx/webportal-arga_access.log;
    error_log /var/log/nginx/webportal-arga_error.log;
}
EOF
    fi

    print_status "Nginx configuration created at $NGINX_CONFIG_FILE"
}

# Enable Nginx site
enable_nginx_site() {
    print_status "Enabling Nginx site..."
    
    # Ensure sites-enabled directory exists
    mkdir -p /etc/nginx/sites-enabled
    
    # Create symlink to sites-enabled
    ln -sf "$NGINX_CONFIG_FILE" /etc/nginx/sites-enabled/
    
    # Remove default site if it exists
    if [ -f /etc/nginx/sites-enabled/default ]; then
        rm /etc/nginx/sites-enabled/default
        print_status "Removed default Nginx site"
    fi
    
    # Ensure main nginx.conf includes sites-enabled
    if [ -f /etc/nginx/nginx.conf ]; then
        if ! grep -q "include /etc/nginx/sites-enabled" /etc/nginx/nginx.conf; then
            # Backup original nginx.conf
            cp /etc/nginx/nginx.conf /etc/nginx/nginx.conf.backup
            
            # Add sites-enabled include to http block
            sed -i '/http {/a\\tinclude /etc/nginx/sites-enabled/*;' /etc/nginx/nginx.conf
            print_status "Added sites-enabled include to nginx.conf"
        fi
    else
        # Create basic nginx.conf if it doesn't exist
        create_basic_nginx_conf
    fi
    
    # Test Nginx configuration
    if nginx -t; then
        print_status "Nginx configuration test passed"
    else
        print_error "Nginx configuration test failed"
        exit 1
    fi
    
    # Reload Nginx
    systemctl reload nginx
    print_status "Nginx reloaded successfully"
}

# Create basic nginx.conf if missing
create_basic_nginx_conf() {
    print_status "Creating basic nginx.conf..."
    
    cat > /etc/nginx/nginx.conf << 'EOF'
user www-data;
worker_processes auto;
pid /run/nginx.pid;
include /etc/nginx/modules-enabled/*.conf;

events {
    worker_connections 768;
}

http {
    sendfile on;
    tcp_nopush on;
    tcp_nodelay on;
    keepalive_timeout 65;
    types_hash_max_size 2048;

    include /etc/nginx/mime.types;
    default_type application/octet-stream;

    ssl_protocols TLSv1 TLSv1.1 TLSv1.2 TLSv1.3;
    ssl_prefer_server_ciphers on;

    access_log /var/log/nginx/access.log;
    error_log /var/log/nginx/error.log;

    gzip on;

    include /etc/nginx/conf.d/*.conf;
    include /etc/nginx/sites-enabled/*;
}
EOF
    
    print_status "Created basic nginx.conf"
}

# Start and enable services
start_services() {
    print_status "Starting and enabling services..."
    
    systemctl enable nginx
    systemctl start nginx
    
    if systemctl is-active --quiet nginx; then
        print_status "Nginx is running successfully"
    else
        print_error "Nginx failed to start"
        exit 1
    fi
}

# Setup SSL certificate with Certbot
setup_ssl() {
    if [ "$USE_SSL" = true ]; then
        print_status "Setting up SSL certificate with Certbot..."
        
        # Check if domain is pointing to this server
        print_warning "Please ensure your domain $DOMAIN_NAME is pointing to this server's IP address"
        read -p "Press Enter to continue once DNS is configured, or Ctrl+C to abort..."
        
        # Obtain SSL certificate
        print_status "Obtaining SSL certificate for $DOMAIN_NAME..."
        certbot --nginx -d "$DOMAIN_NAME" -d "www.$DOMAIN_NAME" --email "$EMAIL" --agree-tos --non-interactive --redirect
        
        if [ $? -eq 0 ]; then
            print_status "SSL certificate obtained and configured successfully"
            
            # Setup automatic renewal
            print_status "Setting up automatic SSL certificate renewal..."
            (crontab -l 2>/dev/null; echo "0 12 * * * /usr/bin/certbot renew --quiet") | crontab -
            print_status "SSL certificate auto-renewal configured"
        else
            print_error "Failed to obtain SSL certificate. The site will run on HTTP only."
            print_warning "You can try running 'sudo certbot --nginx -d $DOMAIN_NAME' manually later"
        fi
    else
        print_status "SSL disabled - site will run on HTTP only"
    fi
}

# Add domain to hosts file for local testing (only if not using real domain)
setup_hosts() {
    if [[ "$DOMAIN_NAME" == *".local"* ]] || [[ "$DOMAIN_NAME" == *"localhost"* ]]; then
        print_status "Adding domain to hosts file for local testing..."
        
        if ! grep -q "$DOMAIN_NAME" /etc/hosts; then
            echo "127.0.0.1    $DOMAIN_NAME" >> /etc/hosts
            print_status "Added $DOMAIN_NAME to /etc/hosts"
        else
            print_status "$DOMAIN_NAME already exists in /etc/hosts"
        fi
    else
        print_status "Using real domain - skipping hosts file modification"
    fi
}

# Verify setup
verify_setup() {
    print_status "Verifying setup..."
    
    echo -e "\n${BLUE}=== SETUP VERIFICATION ===${NC}"
    echo -e "Project Location: ${GREEN}$TARGET_DIR${NC}"
    echo -e "Nginx Config: ${GREEN}$NGINX_CONFIG_FILE${NC}"
    echo -e "Domain: ${GREEN}$DOMAIN_NAME${NC}"
    echo -e "PHP Version: ${GREEN}$(php --version | head -n1)${NC}"
    
    echo -e "\n${BLUE}=== SERVICE STATUS ===${NC}"
    echo -n "Nginx: "
    if systemctl is-active --quiet nginx; then
        echo -e "${GREEN}Running${NC}"
    else
        echo -e "${RED}Not Running${NC}"
    fi
    
    echo -n "PHP-FPM: "
    if systemctl is-active --quiet php${PHP_VERSION}-fpm; then
        echo -e "${GREEN}Running${NC}"
    else
        echo -e "${RED}Not Running${NC}"
    fi
    
    echo -e "\n${BLUE}=== ACCESS INFORMATION ===${NC}"
    echo -e "You can access your application at:"
    if [ "$USE_SSL" = true ]; then
        echo -e "  ${GREEN}https://$DOMAIN_NAME${NC} (HTTPS - Recommended)"
        echo -e "  ${GREEN}http://$DOMAIN_NAME${NC} (HTTP - Redirects to HTTPS)"
    else
        echo -e "  ${GREEN}http://$DOMAIN_NAME${NC}"
        echo -e "  ${GREEN}http://$(hostname -I | awk '{print $1}')${NC}"
    fi
    
    echo -e "\n${BLUE}=== LOG FILES ===${NC}"
    echo -e "Nginx Access Log: ${GREEN}/var/log/nginx/webportal-arga_access.log${NC}"
    echo -e "Nginx Error Log: ${GREEN}/var/log/nginx/webportal-arga_error.log${NC}"
    echo -e "PHP-FPM Log: ${GREEN}/var/log/php${PHP_VERSION}-fpm.log${NC}"
}

# Main execution for local mode
main_local() {
    print_status "Starting LOCAL setup process..."
    
    check_root
    create_directories
    update_system
    install_packages
    setup_project_files
    configure_php_fpm
    create_nginx_snippets
    create_nginx_config
    enable_nginx_site
    start_services
    setup_hosts
    setup_ssl
    verify_setup
}

# Main execution for remote mode
main_remote() {
    print_status "Starting REMOTE setup process..."
    
    # Validate configuration
    if [ "$SERVER_HOST" = "your-server-ip" ]; then
        print_error "Please update SERVER_HOST in the script configuration"
        exit 1
    fi
    
    # Test connection first
    test_connection
    
    # Upload files
    upload_files
    
    # Execute remote setup
    remote_setup
}

# Main execution
main() {
    if [ "$REMOTE_MODE" = true ]; then
        main_remote
    else
        main_local
    fi
    
    echo -e "\n${GREEN}========================================${NC}"
    echo -e "${GREEN}  Setup completed successfully!${NC}"
    echo -e "${GREEN}========================================${NC}"
    echo -e "\nYour application is now available at:"
    echo -e "  ${GREEN}https://$DOMAIN_NAME${NC} (HTTPS - Recommended)"
    echo -e "  ${GREEN}http://$DOMAIN_NAME${NC} (HTTP - Redirects to HTTPS)"
    echo -e ""
    echo -e "SSL certificate will auto-renew daily at 12:00 PM"
    echo -e "Check logs at: /var/log/nginx/webportal-arga_*.log"
    
    print_status "Setup process finished!"
}

# Run main function
main "$@"