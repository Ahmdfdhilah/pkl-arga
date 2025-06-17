<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    /* Reset */
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #f4f4e9;
      color: #000;
      line-height: 1.6;
    }

    /* Header */
    header {
      background-color: #c7e6b2;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .header-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
      gap: 1rem;
    }
    .logo-nav-left img {
      height: 40px;
      width: auto;
      display: block;
    }
    .search-container {
      flex: 1 1 300px;
      max-width: 400px;
      display: flex;
      align-items: center;
      position: relative;
    }
    .search-input {
      width: 100%;
      padding: 8px 35px 8px 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
    }
    .search-icon {
      position: absolute;
      right: 10px;
      color: #333;
      pointer-events: none;
    }
    .nav-links {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      align-items: center;
    }
    .nav-links a {
      text-decoration: none;
      color: #000;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      transition: opacity 0.2s ease;
    }
    .nav-links a.home { color: #006400; }
    .nav-links a:hover { opacity: 0.8; }
    .btn-login {
      background-color: #0a9f3d;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 10px;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }
    .btn-login:hover { background-color: #087a2e; }

    /* Hero Section */
    .hero {
      position: relative;
      width: 100%;
      height: 180px;
      overflow: hidden;
    }
    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .hero-text-container {
      position: absolute;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(244,244,233,0.7);
      border-radius: 20px;
      padding: 0.5rem 1rem;
      text-align: center;
    }
    .hero-text-container p {
      margin: 0;
      font-family: 'Fredoka One', cursive;
      font-size: 1.3rem;
      color: #fff;
      text-shadow: 1px 1px 2px #000;
    }
    .hero-text-container p:first-child {
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      gap: 0.3rem;
    }
    .hero-text-container p:first-child .arrow {
      font-weight: 400;
      color: #4a4a4a;
    }
    .hero-text-container p:last-child {
      font-size: 2rem;
      margin-top: 0.1rem;
    }

    /* Main Content */
    main {
      max-width: 960px;
      margin: 2rem auto;
      padding: 0 1rem;
      text-align: center;
    }
    main h2, main h3 {
      font-family: 'Buckin-Regular', cursive;
      font-weight: 700;
    }
    main h2 { font-size: 1.8rem; margin-bottom: 0.5rem; }
    main h3 { font-size: 1.5rem; margin-bottom: 1.5rem; }
    main p {
      font-size: 1.15rem;
      line-height: 1.33;
      margin-bottom: 2rem;
    }
    .about-content {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      align-items: center;
    }
    .about-text, .about-image {
      flex: 1 1 320px;
      max-width: 420px;
    }
    .about-image img {
      width: 100%;
      display: block;
    }

    .content-wrapper {
    text-align: left;
    padding-left: 2rem;
    }

    .content-wrapper .subheading,
    .content-wrapper p {
      margin-left: 0;
    }

    .content-wrapper .misi-list {
      margin: 0 0 1.5em 0;
      padding: 0;
      list-style: none;
    }

    .content-wrapper .misi-list li {
      position: relative;
      padding-left: 1.5em;   
      text-indent: -1.5em;    
      margin-bottom: 0.75em;
    }
    .misi-list li {
      display: flex;
      align-items: flex-start;
      margin-bottom: 12px;
    }

    .content-wrapper .misi-list li::before {
      content: "✓"; 
      color: #006400; 
      font-size: 20px;
      font-weight: bold;
      display: inline-block;
      margin-right: 1em; 
    }

    .underline {
      width: 220px;
      height: 4px;
      background-color: #00b386;
      margin-right: 0.5em;
      border-radius: 2px;
    }
    .subheading {
      font-weight: bold;
      font-size: 1.3rem;
      margin: 20px 0 10px;
      color: #006400;
    }
    .misi-list {
      list-style: disc;
      text-align: left;
      max-width: 800px;
      margin: 0 auto;
      padding-left: 20px;
    }
    .misi-list li {
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background-color: #c7e6b2;
      padding: 20px 0;
      text-align: center;
      color: #000;
    }
    footer p {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
    }
    footer a {
      color: #0a9f3d;
      text-decoration: none;
      font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 720px) {
      .header-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .search-container {
        max-width: 100%;
        margin-top: 10px;
      }
      .nav-links {
        justify-content: center;
        gap: 10px;
      }
    }
    * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2e8;
    color: #000;
  }
  main {
    max-width: 900px;
    margin: 2rem auto 3rem;
    padding: 0 1rem;
    text-align: center;
  }
  main h2 {
    font-weight: 700;
    font-size: 1.4rem;
    margin-bottom: 2rem;
  }.value-section {
  text-align: center;
  padding: 3rem 1rem;
}
.value-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      max-width: 800px;
      margin: 0 auto;
    }

    .value-card {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 280px;
      text-align: center;
    }

    .value-card img {
      width: 160px;
      margin-bottom: 1rem;
    }

    .value-card h4 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .value-card p {
      font-size: 0.95rem;
      color: #555;
    }

        .aware-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  justify-content: center;
  margin-top: 1.5rem;
}

    .aware-card {
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  overflow: hidden;
  width: 300px; 
  text-align: center;
  transition: transform 0.2s ease;
}

.aware-card img {
  width: 100%;
  height: auto;
  object-fit: contain;
  aspect-ratio: 4 / 3; 
}


.aware-card:hover {
  transform: translateY(-5px);
}

.aware-caption {
  padding: 1rem;
}

.aware-caption p {
  font-size: 0.95rem;
  margin-bottom: 0.5rem;
  color: #333;
}

.aware-caption a {
  text-decoration: none;
  color: #0a9f3d;
  font-weight: bold;
  font-size: 0.9rem;
  transition: color 0.2s ease;
}

.aware-caption a:hover {
  color: #087a2e;
}
  @media (max-width: 400px) {
    header {
      justify-content: center;
      gap: 0.5rem;
    }
    nav {
      justify-content: center;
      gap: 1rem;
      width: 100%;
    }
    .search-container {
      max-width: 100%;
      flex: 1 1 100%;
    }
  }

 .social-media-intro {
  text-align: center;
  margin: 40px auto 20px;
  max-width: 700px;
  font-size: 1.1rem;
  color: #333;
}

.social-media-intro a {
  color: #1da1f2;
  font-weight: bold;
  text-decoration: none;
}

.social-media-intro a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="logo-nav-left">
        <img src="image/logo.png" alt="Logo" />
      </div>
      <nav class="nav-links">
        <a href="index.php" class="home">HOME</a>
        <a href="policy.php">POLICY</a>
        <a href="leadership.php">LEADERSHIP</a>
        <button class="btn-login" onclick="location.href='login.php'">LOGIN</button>

      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" aria-label="Hero banner with coffee beans and cocoa beans background">
    <img src="image/dddd.png" />
  </section>

 <!-- About Us Section -->
<main>
    <h2><span>ABOUT US</span><br>PT. ARGA BUMI INDONESIA</h2>
    <div class="about-list">
        <?php
            include_once 'sistem/koneksi.php';
            $conn = open_connection();

            $result = mysqli_query($conn, "SELECT * FROM about_us");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="about-content">';
                        echo '<div class="about-text">';
                            echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                        echo '</div>';
                        echo '<div class="about-image">';
                            echo '<img src="image/' . htmlspecialchars($row['image']) . '" alt="About us image">';
                        echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada informasi saat ini.</p>';
            }
        ?>
        </div>

  </main>

<!-- Visi & Misi -->
<section class="content-wrapper">
    <h2><span>VISI & MISI</span><br>PT. ARGA BUMI INDONESIA</h2>
    <div class="underline"></div>
    
    <p class="subheading">Visi</p>
    <ul class="misi-list">
        <?php
        include_once 'sistem/koneksi.php';
        $conn = open_connection();
        
        // Fetch Visi
        $visi_data = mysqli_query($conn, "SELECT * FROM visi_misi WHERE category = 'visi'");
        while ($row = mysqli_fetch_assoc($visi_data)) {
            echo '<li>' . htmlspecialchars($row['description']) . '</li>';
        }
        
        $conn->close();
        ?>
    </ul>
    
    <p class="subheading">Misi</p>
    <ul class="misi-list">
        <?php
        include_once 'sistem/koneksi.php';
        $conn = open_connection();
        
        // Fetch Misi
        $misi_data = mysqli_query($conn, "SELECT * FROM visi_misi WHERE category = 'misi'");
        while ($row = mysqli_fetch_assoc($misi_data)) {
            echo '<li>' . htmlspecialchars($row['description']) . '</li>';
        }
        
        $conn->close();
        ?>
    </ul>
</section>


<section>
    <div class="value-section">
        <h2><span>VALUE</span><br>PT. ARGA BUMI INDONESIA</h2> <br>
        <div class="value-cards">
            <?php
            include_once 'sistem/koneksi.php';
            $conn = open_connection();

            $result = mysqli_query($conn, "SELECT * FROM values_table");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="value-card">';
                    echo '<img src="image/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['value']) . '">';
                    echo '<h4>' . htmlspecialchars($row['value']) . '</h4>';
                    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada data value yang tersedia.</p>';
            }
            ?>
        </div>
    </div>

<section class="content-wrapper">
  <h2>OUR SOCIAL MEDIA</h2>
  <div class="aware-cards">

    <?php

    // Fetch data from the introduction table
    $result = mysqli_query($conn, "SELECT * FROM introduction");
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="aware-card">';
        echo '<img src="image/' . htmlspecialchars($row['image']) . '" alt="Introduction Image">';
        echo '<div class="aware-caption">';
        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
        echo '<a href="' . htmlspecialchars($row['link']) . '" target="_blank">Lihat di Instagram</a>';
        echo '</div>';
        echo '</div>';
    }

    $conn->close();
    ?>
  </div>
</section>


<div class="social-media-intro">
  <p>
    Temukan lebih banyak informasi menarik dan edukatif seputar hasil bumi kami di Instagram!  
    <a href="https://www.instagram.com/argaindonesia?igsh=NzUxOHdwYzJ4MjVq" target="_blank">View More</a>
  </p>
</div>

  <br>
  <!-- Footer -->
  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>
</body>
</html>
