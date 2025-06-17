<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4e9;
      color: #333;
      line-height: 1.6;
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
    }

    .nav-links {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      color: #000;
      font-weight: bold;
      transition: opacity 0.2s;
    }

    .nav-links a.home {
      color: #000;
    }

    .nav-links a:nth-child(2) {
      color: #006400;
    }

    .nav-links a:hover {
      opacity: 0.8;
    }

    .btn-login {
      background-color: #0a9f3d;
      color: #fff;
      border: none;
      padding: 8px 15px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .btn-login:hover {
      background-color: #087a2e;
    }

    .hero {
      margin-top: 60px;
      width: 100%;
      height: 180px;
      overflow: hidden;
      position: relative;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* SOP CARD DESIGN */
    .section-sop {
      padding: 80px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .sop-title {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 50px;
      color: #0a9f3d;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
      padding: 25px;
      border-top: 5px solid #0a9f3d;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-number {
      font-size: 24px;
      font-weight: bold;
      color: #0a9f3d;
      margin-bottom: 10px;
    }

    .card-title {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }

    .card-desc {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
      text-align: justify;
    }

    footer {
      background: #c7e6b2;
      padding: 20px 0;
      text-align: center;
      color: #000;
      margin-top: 60px;
    }

    footer a {
      color: #0a9f3d;
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="logo-nav-left"><img src="image/logo.png" alt="Logo" /></div>
      <nav class="nav-links">
        <a href="index.php" class="home">HOME</a>
        <a href="policy.php">POLICY</a>
        <a href="leadership.php">LEADERSHIP</a>
        <button class="btn-login" onclick="location.href='login.php'">LOGIN</button>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero"><img src="image/OIP.jpg" alt="Hero"></section>

  <!-- SOP Section -->
  <section class="section-sop">
    <h1 class="sop-title">SOP PROGRAM</h1>

    <div class="card-grid">

      <div class="card">
        <div class="card-number">01</div>
        <div class="card-title">Lorem Ipsum</div>
        <div class="card-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
        </div>
      </div>

      <div class="card">
        <div class="card-number">02</div>
        <div class="card-title">Lorem Ipsum</div>
        <div class="card-desc">
          The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero's De finibus bonorum et malorum. The physical source may have been the 1914 Loeb...
        </div>
      </div>

      <div class="card">
        <div class="card-number">03</div>
        <div class="card-title">Prosedur Libur</div>
        <div class="card-desc">
          The discovery of the text's origin is attributed to Richard McClintock, a Latin scholar at Hampden–Sydney College. McClintock connected Lorem ipsum to Cicero's writing...
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
