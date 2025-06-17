<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #f4f4e9;
      color: #000;
      line-height: 1.6;
    }

    .hero {
      margin-top: 60px;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
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

    .nav-links {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      transition: opacity 0.2s ease;
    }

    .nav-links a.home {
      color: #000;
    }

    .nav-links a:nth-child(2) {
      color: #000000;
    }

    .nav-links a:nth-child(3) {
      color: #006400;
    }

    .nav-links a:hover {
      opacity: 0.8;
    }

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

    .btn-login:hover {
      background-color: #087a2e;
    }

    .hero {
      position: relative;
      width: 100%;
      height: 180px;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 110%;
      object-fit: cover;
    }

    .struktur-organisasi {
      padding: 50px 20px;
      background-color: #f4f4e9;
      text-align: center;
    }

    .struktur-organisasi h2 {
      font-size: 28px;
      margin-bottom: 40px;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    .struktur-bagan {
      max-width: 100%;
      width: 600px;
      height: auto;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .org-chart {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between; 
      gap: 20px; 
    }

    .box {
      background-color: #f1f1f1;
      padding: 15px;
      border-radius: 10px;
      width: calc(20% - 16px); 
      height: 250px; 
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .box:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .box img {
      width: 100px; 
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
      object-fit: cover;
    }

    .box p {
      font-weight: bold;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .box span {
      font-size: 13px;
      color: #333;
    }

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

    @media (max-width: 768px) {
      .box {
        width: calc(33.33% - 16px); 
      }
    }

    @media (max-width: 480px) {
      .box {
        width: calc(50% - 16px);
      }

      .header-container {
        flex-direction: column;
        gap: 10px;
      }

      .nav-links {
        justify-content: center;
        flex-wrap: wrap;
      }
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
    <img src="image/struktur.jpg" />
  </section>

  <!-- Struktur Organisasi -->
  <section class="struktur-organisasi">
    <h2>STRUKTUR PT. ARGA BUMI INDONESIA</h2>
    <img src="image/struktur bagan.jpg" alt="Berkelanjutan" class="struktur-bagan">
    <div class="org-chart">
      <?php
      include_once 'sistem/koneksi.php';
      $conn = open_connection();

      // Fetch and display data
      $result = mysqli_query($conn, "SELECT * FROM leadership");
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="box">
          <img src="image/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['full_name']); ?>">
          <p><?php echo htmlspecialchars($row['full_name']); ?></p>
          <span><?php echo htmlspecialchars($row['position']); ?></span>
        </div>
      <?php } ?>
    </div>

    <?php
    // Close the connection
    mysqli_close($conn);
    ?>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>
</body>
</html>
