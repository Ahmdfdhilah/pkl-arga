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
      padding: 0 15px;
    }

    .content-container h2 {
      color: #2e7d32;
      text-align: center;
      margin-bottom: 1.8rem;
      font-weight: 700;
      font-size: 2rem;
      text-transform: uppercase;
      letter-spacing: 1.2px;
    }

    section h3 {
      color: #4caf50;
      font-weight: 700;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.4rem;
      border-bottom: 2px solid #4caf50;
      padding-bottom: 6px;
    }

    section h4 {
      color: #4caf50;
      margin-bottom: 0.4rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      justify-content: flex-start;
      font-style: italic;
    }

    h4.important {
      justify-content: center;
      font-style: normal;
      color: #2e7d32;
      font-weight: 700;
      background-color: #dcedc8;
      border-radius: 5px;
      padding: 6px 10px;
      box-shadow: 1px 1px 4px rgba(0,0,0,0.1);
    }

    p {
      color: #3a5d21;
      line-height: 1.7;
      margin-bottom: 1.3rem;
      text-align: justify;
      text-indent: 1.2em;
    }

    ul {
      color: #3a5d21;
      list-style: none;
      padding-left: 1.2rem;
      margin-bottom: 1.7rem;
    }

    ul li {
      position: relative;
      margin-bottom: 0.8rem;
      padding-left: 1.7rem;
      text-align: left;
      font-weight: 500;
    }

    ul li::before {
      content: "\f058";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      position: absolute;
      left: 0;
      top: 0;
      color: #4caf50;
    }

    @media (max-width: 720px) {
      .header-container {
        flex-direction: column;
        text-align: center;
      }

      .nav-links {
        justify-content: center;
      }

      section h3 {
        justify-content: center;
      }
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

  <main class="content-container">

    <h2>PENGGUNAAN FITUR SISTEM INFORMASI INTERNAL</h2>

    <section>
      <h3><i class="fas fa-info-circle"></i> DEFINISI</h3>
      <p>
        Fitur adalah fungsi atau modul tertentu dari perangkat lunak yang dirancang untuk melaksanakan tugas operasional, administratif, atau analitik. Misalnya: fitur input data transaksi, pembuatan laporan, pengelolaan akun karyawan, hingga sistem notifikasi otomatis.
      </p>
    </section>

    <section>
      <h3><i class="fas fa-bullseye"></i> TUJUAN</h3>
      <ul>
        <li>Menjamin bahwa penggunaan fitur sistem informasi sesuai dengan prosedur dan tanggung jawab kerja.</li>
        <li>Meningkatkan efisiensi, akurasi, dan keamanan kerja melalui fitur digital.</li>
        <li>Mencegah penyalahgunaan akses dan pelanggaran data.</li>
        <li>Mengatur tata cara permintaan, modifikasi, dan penghapusan fitur.</li>
      </ul>
    </section>

    <section>
      <h3><i class="fas fa-user-shield"></i> KETENTUAN AKSES DAN PENGGUNAAN</h3>

      <h4><i class="fas fa-lock"></i> Akses Berdasarkan Hak dan Tanggung Jawab</h4>
      <p>
        Setiap karyawan hanya diperkenankan menggunakan fitur yang sesuai dengan hak akses berdasarkan peran dan tanggung jawabnya. Akses dibatasi secara sistematis oleh sistem manajemen hak akses (Role-Based Access Control).
      </p>

      <h4 class="important"><i class="fas fa-exclamation-triangle"></i> Penyalahgunaan Fitur</h4>
      <p>
        Segala bentuk penyalahgunaan fitur—termasuk manipulasi data, penyebaran informasi, atau perubahan konfigurasi tanpa otorisasi—akan dikenakan sanksi administratif atau hukum. Contoh pelanggaran meliputi: mengubah data transaksi tanpa dasar, mencetak dokumen palsu, atau memanfaatkan fitur sistem untuk keuntungan pribadi.
      </p>

      <h4><i class="fas fa-id-badge"></i> Akun Resmi</h4>
      <p>
        Seluruh aktivitas hanya boleh dilakukan menggunakan akun resmi yang diberikan oleh Divisi IT. Dilarang keras meminjamkan atau memberikan kredensial. Aktivitas yang terekam dalam sistem merupakan tanggung jawab pemegang akun.
      </p>

      <h4><i class="fas fa-book"></i> Dokumentasi dan Pelaporan</h4>
      <p>
        Setiap penggunaan fitur yang penting atau kritikal harus didokumentasikan secara elektronik dan dilaporkan sesuai prosedur. Jika ditemukan anomali, harus segera melaporkan kepada atasan dan Divisi IT.
      </p>
    </section>

    <section>
      <h3><i class="fas fa-tools"></i> PROSEDUR PERMINTAAN DAN PERUBAHAN FITUR</h3>

      <h4><i class="fas fa-file-alt"></i> Permintaan Fitur Baru</h4>
      <p>
        Karyawan yang membutuhkan fitur baru wajib mengisi formulir permintaan fitur dan menyertakan alasan serta dampaknya terhadap pekerjaan. Formulir diajukan ke atasan langsung untuk disetujui sebelum diteruskan ke Divisi IT.
      </p>

      <h4><i class="fas fa-edit"></i> Perubahan Fitur</h4>
      <p>
        Permintaan perubahan fitur harus diajukan secara tertulis dengan alasan jelas. Setiap perubahan akan melalui evaluasi risiko dan pengujian sebelum diimplementasikan.
      </p>

      <h4><i class="fas fa-trash-alt"></i> Penghapusan Fitur</h4>
      <p>
        Fitur yang sudah tidak relevan atau bermasalah dapat diajukan untuk penghapusan. Proses ini harus disetujui oleh manajemen dan Divisi IT setelah analisis dampak menyeluruh.
      </p>
    </section>

    <section>
      <h3><i class="fas fa-shield-alt"></i> KEAMANAN DAN PRIVASI</h3>
      <p>
        Penggunaan fitur harus senantiasa menjaga keamanan data dan privasi. Data yang diolah dalam sistem informasi adalah aset penting perusahaan dan harus dijaga kerahasiaannya sesuai kebijakan yang berlaku.
      </p>
    </section>

  </main>

  <footer>
    &copy; 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a>
  </footer>

</body>
</html>
