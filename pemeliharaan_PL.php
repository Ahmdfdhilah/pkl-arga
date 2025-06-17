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

    .content-container {
      max-width: 900px;
      margin: 2rem auto 4rem;
      padding: 2rem 1.5rem;
      background-color: #ffffffcc; 
      border-radius: 10px;
      box-shadow: 0 4px 15px rgb(0 0 0 / 0.1);
    }

    .content-container h1 {
      font-size: 2.2rem;
      color: #2e7d32;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .content-container h2 {
      font-size: 1.5rem;
      color: #388e3c;
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      border-bottom: 2px solid #81c784;
      padding-bottom: 5px;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .content-container h3 {
      font-size: 1.2rem;
      color: #4caf50;
      margin-top: 1.8rem;
      margin-bottom: 0.8rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .content-container p {
      font-size: 1rem;
      color: #333;
      margin-bottom: 1rem;
      text-align: justify;
    }

    .content-container ul {
      list-style: disc inside;
      margin-left: 1rem;
      margin-bottom: 1rem;
      color: #444;
    }

    .content-container ul li {
      margin-bottom: 0.5rem;
      line-height: 1.4;
      display: flex;
      align-items: center;
      gap: 0.5rem;
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

      .content-container {
        margin: 1rem;
        padding: 1rem 1rem;
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

  <section class="hero">
    <img src="image/OIP.jpg" alt="Hero" />
  </section>

  <section class="content-container">
    <h1><i class="fas fa-tools"></i> PEMELIHARAAN DAN PEMBARUAN <br> PERANGKAT LUNAK</h1>

    <h2><i class="fas fa-info-circle"></i> DEFINISI</h2>
    <p>
      Perangkat lunak pendukung operasional adalah seluruh sistem aplikasi digital, baik desktop, mobile, maupun berbasis web, yang digunakan untuk mendukung proses bisnis PT Arga Bumi Indonesia. Contohnya termasuk tetapi tidak terbatas pada sistem informasi perusahaan, sistem MPM perusahaan, aplikasi pencatatan transaksi pembelian, serta aplikasi khusus internal lainnya.
    </p>
    <p>
      Pemeliharaan dan pembaruan perangkat lunak mencakup semua aktivitas yang dilakukan untuk menjaga performa sistem agar tetap optimal, termasuk perbaikan bug, pembaruan keamanan, penyesuaian terhadap regulasi baru, dan penambahan fitur.
    </p>

    <h2><i class="fas fa-bullseye"></i> TUJUAN</h2>
    <ul>
      <li><i class="fas fa-check-circle"></i> Menjamin ketersediaan dan stabilitas sistem perangkat lunak.</li>
      <li><i class="fas fa-check-circle"></i> Memastikan bahwa sistem yang digunakan selalu relevan terhadap kebutuhan operasional.</li>
      <li><i class="fas fa-check-circle"></i> Mencegah kerugian operasional yang disebabkan oleh sistem yang tidak diperbarui.</li>
      <li><i class="fas fa-check-circle"></i> Menstandarisasi alur kerja terkait pembaruan dan pemeliharaan sistem agar seluruh divisi memiliki acuan yang sama.</li>
    </ul>

    <h2><i class="fas fa-globe"></i> RUANG LINGKUP</h2>
    <p>
      Kebijakan ini berlaku untuk semua sistem informasi yang dikembangkan, dibeli, atau digunakan oleh PT Arga Bumi Indonesia dalam mendukung kegiatan operasional.
    </p>

    <h2><i class="fas fa-clipboard-list"></i> SYARAT DAN KETENTUAN</h2>

    <h3><i class="fas fa-calendar-alt"></i> Jadwal Pemeliharaan</h3>
    <p>
      Pemeliharaan perangkat lunak dilakukan secara berkala minimal setiap 1 (satu) bulan sekali untuk memastikan ketersediaan dan kinerja optimal sistem. Penjadwalan akan diinformasikan kepada seluruh pengguna terkait melalui platform komunikasi minimal H-2 sebelum pelaksanaan.
    </p>

    <h3><i class="fas fa-sync-alt"></i> Pembaruan Sistem</h3>
    <p>
      Pembaruan dilakukan jika terdapat perintah dari manajemen, temuan kerentanan keamanan, atau usulan fitur yang telah disetujui. Seluruh proses pembaruan wajib didahului oleh analisis kebutuhan sebelum diterapkan ke sistem utama. Backup data wajib dilakukan sebelum implementasi pembaruan.
    </p>

    <h3><i class="fas fa-exclamation-triangle"></i> Downtime dan Notifikasi</h3>
    <p>
      Setiap pembaruan besar yang berpotensi menyebabkan downtime wajib diinformasikan kepada seluruh pengguna minimal H-2. Estimasi waktu pemulihan juga harus disampaikan.
    </p>

    <h3><i class="fas fa-undo-alt"></i> Rollback dan Recovery</h3>
    <p>
      Jika update menyebabkan gangguan operasional atau kerusakan sistem, rollback ke versi sebelumnya harus dilakukan maksimal dalam 2x24 jam.
    </p>

    <h3><i class="fas fa-check-double"></i> Evaluasi Pasca Update</h3>
    <p>
      Divisi IT akan melakukan evaluasi maksimal 5 hari kerja setelah pembaruan diterapkan untuk mengevaluasi efektivitas pembaruan dan mengidentifikasi potensi error lanjutan.
    </p>

    <h2><i class="fas fa-file-alt"></i> ADMINISTRASI DAN DOKUMENTASI</h2>
    <p>Setiap aktivitas pembaruan harus dicatat dalam log perubahan yang mencakup:</p>
    <ul>
      <li><i class="fas fa-file-signature"></i> Nama sistem/aplikasi</li>
      <li><i class="fas fa-calendar-day"></i> Tanggal dan waktu pembaruan</li>
      <li><i class="fas fa-edit"></i> Jenis perubahan</li>
      <li><i class="fas fa-cogs"></i> Fitur pembaruan</li>
    </ul>
    <p>
      Semua log dan dokumentasi pembaruan disimpan di server internal yang hanya dapat diakses oleh Tim IT dan Manajemen. Dokumen log dapat diaudit oleh pihak internal perusahaan setiap saat.
    </p>
  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
