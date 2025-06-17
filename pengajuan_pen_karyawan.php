<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PT. Arga Bumi Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
      transition: color 0.3s ease;
    }

    .nav-links a:nth-child(2) {
      color: #006400;
    }

    .nav-links a:hover {
      color: #0a9f3d;
    }

    .btn-login {
      background-color: #0a9f3d;
      color: #fff;
      border: none;
      padding: 8px 15px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
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

    .content-section {
      background-color: #fff;
      padding: 50px 35px;
      max-width: 900px;
      margin: 40px auto;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      color: #000;
    }

    .content-section h2 {
      text-align: center;
      text-transform: uppercase;
      color: #0a9f3d;
      font-size: 24px;
      margin-bottom: 5px;
    }

    .content-section .subtitle {
      text-align: center;
      margin-bottom: 30px;
      color: #555;
    }

    .section-icon {
      color: #2f855a;
      margin-right: 8px;
    }

    .content-section h3 {
      color: #2f855a;
      margin-top: 30px;
      font-size: 18px;
      display: flex;
      align-items: center;
    }

    .content-section p,
    .content-section ul {
      text-align: left;
      margin-bottom: 20px;
    }

    .content-section ul {
      padding-left: 20px;
      list-style: disc;
    }

    .content-section a {
      color: #0a9f3d;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .content-section a:hover {
      text-decoration: underline;
    }

    footer {
      background: #c7e6b2;
      padding: 20px 0;
      text-align: center;
      color: #000;
      font-size: 14px;
    }

    footer a {
      color: #0a9f3d;
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 720px) {
      .header-container {
        flex-direction: column;
        text-align: center;
      }

      .nav-links {
        justify-content: center;
      }

      .content-section {
        padding: 30px 20px;
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

  <section class="content-section">
    <h2>PENAMBAHAN KARYAWAN</h2>
    <p class="subtitle">No. 024/PK /SOP-SC /V/2024</p>

    <h3><i class="fas fa-bullseye section-icon"></i>Tujuan</h3>
    <p>Penambahan karyawan didasarkan atas kebutuhan di setiap Unit/Departemen yang sesuai dengan kualifikasi kerja dalam rangka produktivitas dan kelancaran operasional perusahaan.</p>

    <h3><i class="fas fa-vector-square section-icon"></i>Ruang Lingkup</h3>
    <p>Prosedur ini berlaku dan ditetapkan di Perusahaan PT Arga Bumi Indonesia untuk: Penambahan Karyawan.</p>

    <h3><i class="fas fa-user-plus section-icon"></i>Definisi Penambahan Karyawan</h3>
    <p>Tindakan penambahan individu baru ke dalam tim atau organisasi sebagai anggota tetap atau sementara.</p>

    <h3><i class="fas fa-user-shield section-icon"></i>Penanggung Jawab</h3>
    <ul>
      <li>Permohonan penambahan karyawan ke Departemen HR dilakukan oleh User atau departemen permohonan.</li>
      <li>Departemen HR menyiapkan permohonan karyawan dengan memohon persetujuan pihak-pihak yang berwenang.</li>
      <li>Dengan adanya persetujuan, maka proses seleksi akan segera dilaksanakan oleh HR Departemen dengan melibatkan departemen yang membutuhkan.</li>
      <li>Melaksanakan seleksi administrasi dengan mengetahui kelengkapan administrasi pelamar serta pengetahuan, keahlian dan kemampuan yang diperlukan.</li>
      <li>Jenis tes seleksi disesuaikan dengan jabatan yang ditujukan dengan tes psikologis, tes sikap, minat dan keahlian.</li>
      <li>Hasil tes dilanjutkan dengan interview dengan HR kemudian jika lulus maka interview selanjutnya dengan user.</li>
    </ul>

    <h3><i class="fas fa-paperclip section-icon"></i>Lampiran</h3>
    <p>Surat permohonan Penambahan karyawan</p>

    <p><a href="https://docs.google.com/document/d/1RXIwE0VtNTH7DcD3Xq0yYj09s5brKd0DGzLyxxXExG8/edit?usp=sharing" target="_blank">
      <i class="fas fa-file-alt"></i> Baca ketentuan selengkapnya di sini
    </a></p>
  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
