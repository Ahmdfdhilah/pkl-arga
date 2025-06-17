<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Poppins', sans-serif;
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

    .nav-links a.home { color: #000; }
    .nav-links a:nth-child(2) { color: #006400; }
    .nav-links a:hover { opacity: 0.8; }

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
    .btn-login:hover { background-color: #087a2e; }

    .hero {
      width: 100%; height: 180px; overflow: hidden; position: relative;
    }
    .hero img { width: 100%; height: 100%; object-fit: cover; }

    .section-dinas { background: #f3f5eb; padding: 60px 20px; }
    .container-dinas { max-width: 1000px; margin: auto; }

    .text-title {
      text-align: center;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #000;
    }

    .row-dinas {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-bottom: 60px;
    }

    .text-dinas {
      flex: 1 1 60%;
      padding-left: 20px;
      margin-right: 20px;
    }
    .text-dinas h2 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 15px;
    }
    .text-dinas p {
      text-align: justify;
      line-height: 1.6;
      font-size: 16px;
      color: #111;
    }

    .image-dinas {
      flex: 1 1 35%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .image-dinas img { max-width: 100%; border-radius: 8px; }

    .row-dinas.tujuan,
    .row-dinas.syarat-ketentuan {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      text-align: left;
    }

    .row-dinas.tujuan .text-dinas,
    .row-dinas.syarat-ketentuan .text-dinas {
      flex: 1 1 100%;
    }

    .row-dinas.syarat-ketentuan ol {
      padding-left: 20px;
    }
    .row-dinas.syarat-ketentuan li {
      margin-bottom: 1rem;
      font-size: 16px;
      line-height: 1.6;
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

    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s ease forwards;
    }
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 720px) {
      .header-container { flex-direction: column; text-align: center; }
      .nav-links { justify-content: center; }
      .text-dinas, .text-tujuan {
        flex: 1 1 100%; padding-left: 0; margin-right: 0;
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

  <section class="section-dinas">
    <div class="container-dinas">
      <div class="text-title">PERJALANAN DINAS LUAR KOTA</div>

      <div class="row-dinas fade-in">
        <div class="text-dinas">
          <h2><i class="fas fa-info-circle"></i> DEFINISI</h2>
          <p>
            Perjalanan dinas dalam negeri adalah perjalanan yang dilakukan oleh karyawan atas perintah atau tugas perusahaan di luar home base atau daerah penempatan atau kabupaten atau cluster karyawan termasuk di dalamnya untuk kepentingan rapat atau seminar atau workshop dan kepentingan perusahaan lainnya.
          </p>
        </div>
        <div class="image-dinas">
          <img src="image/pdlk.jpg" alt="Definisi">
        </div>
      </div>

      <div class="row-dinas tujuan fade-in">
        <div class="text-dinas">
          <h2 style="text-align: center;"><i class="fas fa-bullseye"></i> TUJUAN</h2>
          <p style="text-align: center;">
            Tujuan dari perjalanan dinas adalah untuk memberikan pedoman yang jelas, konsisten dan terstandarisasi dalam<br>
            pelaksanaan kegiatan perjalanan dinas.
          </p>
        </div>
      </div>

      <div class="row-dinas syarat-ketentuan fade-in">
        <div class="text-dinas">
          <h2><i class="fas fa-file-alt"></i> SYARAT DAN KETENTUAN</h2>
          <ol>
            <li>Perjalanan dalam homebase/area/distrik/cluster penempatan tidak termasuk dalam kebijakan ini.</li>
            <li>Perjalanan dinas yang berkaitan dengan agenda pelatihan, outing, atau kegiatan perusahaan tidak menggunakan sistem reimbursement karena anggaran akan dikelola langsung oleh Head Office (HO), kecuali untuk biaya transportasi dan bahan bakar (BBM), sebagaimana dijelaskan pada poin 3.</li>
            <li>Perjalanan dinas dalam negeri dapat dilakukan selama 1 (satu) hingga 14 (empat belas) hari berturut-turut. Jika melebihi jangka waktu tersebut, maka dianggap sebagai penugasan atau perpindahan homebase.</li>
            <li>Setiap perjalanan dinas harus diajukan minimal H-3 melalui link: <a href="https://bit.ly/PerjalananDinasKaryawan" target="_blank">https://bit.ly/PerjalananDinasKaryawan</a>. Nota yang akan direimburse harus dilaporkan melalui link yang sama paling lambat 7 hari setelah perjalanan.</li>
            <li>Head of Division bertanggung jawab untuk memastikan efektivitas dan efisiensi dari perjalanan dinas yang dilakukan oleh karyawan.</li>
          </ol>
          <p><a href="https://shorturl.at/czSck" target="_blank">Baca ketentuan selengkapnya di sini</a></p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
