<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4e9;
    color: #000;
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

  footer {
    background: #c7e6b2;
    padding: 20px 0;
    text-align: center;
    color: #000;
  }

  footer a {
    color: #0a9f3d;
    text-decoration: none;
    font-weight: bold;
  }

  @media (max-width: 720px) {
    .header-container {
      flex-direction: column;
      text-align: center;
    }

    .nav-links {
      justify-content: center;
    }
  }
</style>
</head>
<body>

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

  <section class="hero"><img src="image/OIP.jpg" alt="Hero"></section>

  

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
