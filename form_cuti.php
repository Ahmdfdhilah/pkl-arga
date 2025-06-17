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

    .section-sop {
      background-color: #f9fdf5;
      padding: 60px 20px;
      font-family: 'Poppins', sans-serif;
    }

    .container-sop {
      max-width: 850px;
      margin: auto;
      color: #111;
    }

    .sop-title {
      font-size: 30px;
      text-align: center;
      margin-bottom: 40px;
      color: #000000;
      font-weight: 700;
            padding-bottom: 10px;
    }

    .sop-block {
      background: #ffffff;
      border: 1px solid #d9eeda;
      border-left: 6px solid #0a9f3d;
      border-radius: 8px;
      padding: 20px 25px;
      margin-bottom: 30px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
    }

    .sop-subtitle {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 12px;
      color: #006400;
    }

    .sop-block p {
      font-size: 16px;
      line-height: 1.7;
      text-align: justify;
    }

    .sop-list {
      padding-left: 20px;
      list-style: disc;
    }

    .sop-list li {
      margin-bottom: 12px;
      line-height: 1.7;
      font-size: 16px;
    }

    a {
      color: #0a9f3d;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    .signature-section {
      margin-top: 30px;
    }

    .date-location {
      margin-bottom: 20px;
      font-size: 16px;
      color: #111;
    }

    .signature-row {
      display: flex;
      justify-content: space-between;
      align-items: flex-start; 
      gap: 9px; 
      flex-wrap: wrap;
    }

    .signature-col {
      flex: 1 1 45%; 
      min-width: 250px;
      text-align: center;
    }

    .signature-img {
      max-height: 90px;
      margin-bottom: 5px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .signature-col:first-child .signature-img {
  display: block;
  margin-left: 0;  
  margin-top: 5px; 
  max-height: 90px;
  width: auto;
}

    .signature-col:nth-child(2) .signature-img {
      margin-left: -15px; 
      margin-right: auto;
      display: block;
    }

    .sign-name {
      font-size: 16px;
      font-weight: bold;
      margin-top: 0;
    }

    .bold {
      font-weight: 600;
    }

    .jabatan {
      font-size: 16px;
      font-weight: normal;
      margin-bottom: 5px;
      line-height: 1.4;
    }

    @media (max-width: 768px) {
      .signature-col {
        width: 100%;
        margin-bottom: 30px;
      }
      
      .signature-col:nth-child(2) .signature-img {
        margin-left: 0;
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

  <section class="section-sop">
    <div class="container-sop">
      <h1 class="sop-title">SOP LIBUR KARYAWAN SITE</h1>

      <div class="sop-block">
        <h2 class="sop-subtitle">TUJUAN</h2>
        <p>SOP ini bertujuan untuk memberikan penjelasan mengenai tata cara permohonan LIBUR yang dilakukan oleh pegawai khususnya yang berada di site (Lapangan)</p>
      </div>

      <div class="sop-block">
        <h2 class="sop-subtitle">RUANG LINGKUP</h2>
        <p>Prosedur ini berlaku dan ditetapkan di PT Arga Bumi Indonesia untuk:<br>Libur karyawan</p>
      </div>

      <div class="sop-block">
        <h2 class="sop-subtitle">PROSEDUR LIBUR</h2>
        <ul class="sop-list">
          <li>Libur karyawan site bersifat 20 hari kerja dan 5 hari libur atau 40 hari kerja dan 10 hari libur.</li>
          <li>Pengajuan libur paling lambat 7 hari sebelum hari libur.</li>
          <li>Pegawai yang bersangkutan mengajukan libur kepada atasan langsung untuk mendapatkan persetujuan berupa tanda tangan atau screenshoot approval libur.</li>
          <li>Jika mendapatkan approval atau persetujuan melalui wa silahkan di capture dan dilampirkan.</li>
          <li>Pegawai yang akan menjalankan libur, mengajukan permohonan libur dan form pengajuan libur karyawan:
            <br><a href="https://bit.ly/FormPengajuanLiburKaryawanSite" target="_blank">https://bit.ly/FormPengajuanLiburKaryawanSite</a>
          </li>
        </ul>
      </div>

      <div class="sop-block">
        <h2 class="sop-subtitle">PENANGGUNG JAWAB</h2>
        <ul class="sop-list">
          <li>Karyawan bertanggung jawab dalam mengajukan usulan pengajuan libur karyawan di tanggal yang sudah ditentukan.</li>
          <li>Karyawan memastikan bahwa pada saat libur, ada karyawan lain yang menggantikan pekerjaannya.</li>
          <li>Karyawan berkewajiban untuk mengajukan cuti kepada head of department terlebih dahulu.</li>
          <li>Administrasi site atau Staff KIR meminta izin kepada kepala gudang atau team leader untuk proses libur.</li>
          <li>Agronomist meminta izin kepada Manager kebun untuk proses libur.</li>
          <li>Kepala gudang meminta izin kepada Manager Procurement.</li>
          <li>Setelah adanya proses pengajuan tersebut maka wajib lapor kepada HRD untuk pengajuan libur yang ditentukan.</li>
          <li>Jika karyawan lapangan ingin mengajukan libur maka karyawan harus memenuhi syarat minimal hari bekerja sebanyak 20 hari kerja atau 40 hari kerja.</li>
        </ul>
      </div>

      <div class="sop-block">
        <h2 class="sop-subtitle">LAMPIRAN</h2>
        <p>a. Google Formulir</p>
      </div>

      <div class="sop-block">
        <h2 class="sop-subtitle">FLOW CHART :</h2>
        <p>Flowchart pengajuan libur karyawan terlampir.</p>

        <div class="signature-section">
          <div class="date-location">Bandar lampung, 4 Desember 2024</div>

          <div class="signature-row">
            <div class="signature-col">
              <br><p class="jabatan">Human Capital</p>
              <img src="image/cropped_ttd2.png" alt="Tanda Tangan HC" class="signature-img" />
              <p class="sign-name">Ine Lavranzka</p>
            </div>

            <div class="signature-col">
              <p class="jabatan">Mengetahui,<br>Direksi</p>
              <img src="image/cropped_ttd1.png" alt="Tanda Tangan Direksi" class="signature-img" />
              <p class="sign-name bold">Ikhwan Ferdian Widiarto</p>
            </div>
            <section class="big-image-section" style="margin: 20px 0;">
             <img src="image/flow.png" alt="Gambar Besar" style="width: 100%; height: auto; display: block;" /></section>
          </div>
        </div>
      </div>
      <div class="sop-block">
        <h2 class="sop-subtitle">QR CODE PENGAJUAN</h2>
        <p>Scan Qr Code untuk masuk kedalam form pengajuan libur karyawan</p>
        <section class="big-image-section" style="margin: 20px 0;">
        <img src="image/qr.png" alt="Gambar Besar" style="width: 50%; height: auto; display: block;" />
      </section>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
