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
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
      transition: opacity 0.2s ease;
    }
    .nav-links a.home { color: #000; }
    .nav-links a:nth-child(2) { color: #006400; }
    .nav-links a:nth-child(3) { color: #000000; }
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
    main {
      padding: 30px 20px 50px;
      text-align: center;
    }
    main h1 {
      font-weight: 700;
      font-size: 28px;
      margin: 0 0 40px;
      line-height: 1.3;
    }
    .policies-container {
      display: flex;
      justify-content: center;
      gap: 60px;
      flex-wrap: wrap;
    }
    .policy-category {
      max-width: 280px;
      width: 100%;
      text-align: left;
    }
    .policy-category h2 {
      font-weight: 700;
      font-size: 20px;
      margin-bottom: 15px;
      color: #000;
    }
    .policy-list {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
    .policy-item {
      background-color: #2f6f2a;
      font-weight: 700;
      font-size: 16px;
      border-radius: 6px;
      padding: 10px 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      color: #ffffff;
    }
    .policy-item .fa-chevron-down {
      color: #d1e7d1;
      font-size: 16px;
    }
    .policy-content {
      display: none;
      padding: 10px 15px;
      background-color: #d1e7d1;
      border-radius: 6px;
      margin-top: 5px;
      font-size: 14px;
    }
  
    @media (max-width: 900px) {
      .banner-images img { height: 150px; }
      main h1 { font-size: 24px; margin-bottom: 30px; }
      .policies-container { gap: 40px; }
      .policy-category { max-width: 100%; width: 100%; }
    }
    @media (max-width: 480px) {
      .header-container { flex-direction: column; gap: 10px; }
      .search-container { width: 100%; margin: 0; }
      .nav-links { justify-content: center; flex-wrap: wrap; }
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
  </style>
</head>
<body>
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

  <section class="hero" aria-label="Hero banner with coffee beans and cocoa beans background">
    <img src="image/OIP.jpg" />
  </section>

  <main>
    <h1>
      This page shows all Human Resource, Information &amp; Technology, Finance and other employee related policies and SOP across Arga Bumi Indonesia
    </h1>
    <section aria-label="Policy categories and their items" class="policies-container">
  
      <!-- Human Resource -->
      <div aria-labelledby="hr-title" class="policy-category">
        <h2 id="hr-title">Human Resource</h2>
        <div class="policy-list">
          <div class="policy-item" tabindex="0">Employment Policy<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="perjalanan_DL_kota.php" style="color: inherit; text-decoration: underline;">Perjalanan Dinas Luar Kota</a></p>
          </div>
         <div class="policy-content">
            <p><a href="form_cuti.php" style="color: inherit; text-decoration: underline;">Form Cuti/Libur Karyawan</a></p>
          </div>
          <div class="policy-content">
            <p><a href="form_exit.php" style="color: inherit; text-decoration: underline;">Form Exit Interview</a></p>
          </div>
          <div class="policy-content">
            <p><a href="berita_acara.php" style="color: inherit; text-decoration: underline;">Berita Acara Pinjam-Pakai</a></p>
          </div>
          <div class="policy-item" tabindex="0">Employee Recruitment Policy<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="pengajuan_pen_karyawan.php" style="color: inherit; text-decoration: underline;">Pengajuan penambahan karyawan</a></p>
          </div>
          <div class="policy-content">
             <p><a href="recruitment.php" style="color: inherit; text-decoration: underline;">Rekrutmen dan Seleksi</a></p>
          </div>
          <div class="policy-content">
             <p><a href="masa_trainee.php" style="color: inherit; text-decoration: underline;">Masa Trainee Karyawan</a></p>
          </div>
          <div class="policy-content">
             <p><a href="pengangkatan_trainee.php" style="color: inherit; text-decoration: underline;">Pengangkatan dari Masa Trainee ke Karyawan Kontrak</a></p>
          </div>
          </div>
      </div>
  
      <!-- Information Technology -->
      <div aria-labelledby="it-title" class="policy-category">
        <h2 id="it-title">Information Technology</h2>
        <div class="policy-list">
          <div class="policy-item" tabindex="0">Maintenance Policy<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="pemeliharaan_PL.php" style="color: inherit; text-decoration: underline;">Pemeliharaan & Pembaruan Perangkat Lunak</a></p>
          </div>
  
          <div class="policy-item" tabindex="0">Software Usage Policy<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="penggunaan_fitur_SI.php" style="color: inherit; text-decoration: underline;">Penggunaan Fitur Sistem Informasi Internal</a></p>
          </div>
  
        </div>
      </div>
  
      <!-- Finance -->
      <div aria-labelledby="finance-title" class="policy-category">
        <h2 id="finance-title">Finance</h2>
        <div class="policy-list">
          <div class="policy-item" tabindex="0">Reimbursment Biaya Lainnya<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="reimburs.php" style="color: inherit; text-decoration: underline;">Reimbursment</a></p>
          </div>
  
          <div class="policy-item" tabindex="0">SOP Program<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="sop_program.php" style="color: inherit; text-decoration: underline;">Sop Program</a></p>
          </div>
  
          <div class="policy-item" tabindex="0">SOP Pembelian<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="sop_pembelian.php" style="color: inherit; text-decoration: underline;">Sop Pembelian</a></p>
          </div>
  
          <div class="policy-item" tabindex="0">SOP Administrasi lainnya<i class="fas fa-chevron-down"></i></div>
          <div class="policy-content">
            <p><a href="sop_adm.php" style="color: inherit; text-decoration: underline;">Sop Administrasi</a></p>
          </div>
        </div>
      </div>
  
    </section>
  </main>
  
  <script>
  const policyItems = document.querySelectorAll('.policy-item');
  
  policyItems.forEach(item => {
    item.addEventListener('click', function () {
      const icon = item.querySelector('.fa-chevron-down, .fa-chevron-up');
      let next = item.nextElementSibling;
      let isVisible = next && next.style.display === 'block';

      if (isVisible) {
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
      } else {
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
      }

      while (next && next.classList.contains('policy-content')) {
        next.style.display = isVisible ? 'none' : 'block';
        next = next.nextElementSibling;
      }
    });
  });
</script>


  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>
</body>
</html>
