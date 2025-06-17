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
      color: #333;
      line-height: 1.7;
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

    .container {
      background-color: #ffffff;
      padding: 40px 30px;
      margin: 40px auto;
      max-width: 950px;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      text-transform: uppercase;
      margin-bottom: 5px;
      color: #0a9f3d;
      text-shadow: 1px 1px #c7e6b2;
    }

    .section {
      margin-bottom: 30px;
      padding: 20px;
      border-left: 5px solid #0a9f3d;
      background-color: #f9f9f4;
      border-radius: 10px;
      animation: fadeIn 1s ease;
    }

    .section:nth-child(even) {
      background-color: #eefae8;
    }

    .section h3 {
      display: flex;
      align-items: center;
      font-size: 20px;
      color: #0a9f3d;
      margin-bottom: 15px;
    }

    .section i {
      background-color: #0a9f3d;
      color: white;
      border-radius: 50%;
      padding: 8px;
      margin-right: 10px;
    }

    ul {
      margin-left: 25px;
      list-style-type: disc;
    }

    strong {
      color: #0a9f3d;
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

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 720px) {
      .header-container {
        flex-direction: column;
        text-align: center;
      }

      .nav-links {
        justify-content: center;
      }

      .container {
        padding: 20px;
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

  <section class="container">
    <h2>KETENTUAN PROSES REKRUTMEN DAN SELEKSI KARYAWAN</h2>
    <p style="text-align:center; margin-bottom:30px;">No.005/SPK/STK-SC/II/2024</p>

    <div class="section">
      <h3><i class="fas fa-bullseye"></i> Tujuan</h3>
      <ul>
        <li>Mencari tenaga kerja yang sesuai dengan jabatan dan kompetensi yang sesuai.</li>
        <li>Melakukan proses rekrutmen dan seleksi yang sesuai dengan standar.</li>
      </ul>
    </div>

    <div class="section">
      <h3><i class="fas fa-book"></i> Definisi</h3>
      <p><strong>Rekrutmen</strong> adalah proses penarikan sekelompok kandidat untuk mengisi posisi atau jabatan yang kosong pada suatu perusahaan atau organisasi.</p>
      <p><strong>Seleksi</strong> adalah proses untuk mencari kandidat yang sesuai berdasarkan value perusahaan, kompetensi dan sesuai dengan persyaratan yang telah ditentukan dalam jabatan tersebut.</p>
    </div>

    <div class="section">
      <h3><i class="fas fa-user-tie"></i> Penanggung Jawab</h3>
      <p>Departemen HR, Head of department, dan Direktur PT Arga Bumi Indonesia</p>
    </div>

    <div class="section">
      <h3><i class="fas fa-tasks"></i> Rincian Prosedur</h3>
      <p><strong>A. Proses Rekrutmen</strong></p>
      <ul>
        <li>Proses Rekrutmen tersebut berisikan jobdesc dan jobspec pada jabatan yang dibutuhkan.</li>
        <li>Setelah itu, diberikan ke departemen design untuk dijadikan flayer dan di posting di beberapa lowongan kerja di media sosial.</li>
        <li>Setelah itu, kandidat diberikan link untuk daftar secara online melalui google form yang disediakan oleh departemen HR.</li>
      </ul>
      <p><strong>B. Proses Seleksi</strong></p>
      <ul>
        <li>Seleksi Administrasi: Pada proses seleksi yang pertama kali adalah seleksi administrasi dengan mencocokan persyaratan atau Job spesifikasi dengan spesifikasi kandidat pelamar seperti di dalam CV (kesesuaian pendidikan, Pengalaman pekerjaan, kompetensi yang dibutuhkan dan lain sebagainya).</li>
        <li>Psikotes (Intelegensi): Proses ini menggunakan alat tes untuk mengungkap intelegensi seperti IST, WPT dan lain-lain..</li>
        <li>Tes Kepribadian: Proses tes ini menggunakan alat tes kepribadian seperti DISC, Papi Kostick dan lain-lain. </li>
        <li>Tes Pendukung: Proses test ini didukung oleh tes grafis untuk memastikan kondisi psikologis kandidat.</li>
      </ul>
      <p><strong>C. Proses Interview</strong></p>
      <ul>
        <li>Interview HR: Interview yang dilakukan HR untuk mengungkap kepribadian, perilaku, motivasi bekerja dan kesesuaian antara jabatan dengan kompetensi yang ada.</li>
        <li>Interview User: Interview yang dilakukan oleh Head of departemen atau orang yang ahli pada departemen tersebut untuk menguji kompetensi kandidat sesuai dengan jabatan yang dicari.</li>
        <li>Final Interview:Interview yang dilakukan oleh Kepala Pengurus Perusahaan PT Arga Bumi Indonesia dan jajaran Direksi untuk memastikan nilai-nilai yang ada dalam perusahaan sesuai dengan nilai individu pada kandidat.</li>
      </ul>
      <p><strong>D. Level Staff & Proses Seleksi</strong></p>
      <ul>
        <li><strong>Level Staff:</strong> Interview HR → Interview User langsung Final Interview  → Keputusan (ketua perusahaan)</li>
        <li><strong>Level SPV:</strong> Psikotest→ Interview HR → Interview User→ Final Interview dengan Ketua Perusahaan</li>
        <li><strong>Level Manager/C-Level:</strong> Psikotest→ Interview HR → Interview User → Interview dengan ketua Perusahaan dan Direksi.</li>
      </ul>
      <p><strong>E. Keputusan Penerimaan Kandidat</strong></p>
      <ul>
        <li>Pada proses psikotes berlangsung tes tersebut bisa dilakukan secara online maupun offline.</li>
        <li>Hasil administrasi psikotes tersebut diberikan kepada HR ada proses interview.</li>
        <li>Setelah itu, hasil psikotes dan Interview HR diberikan ke User untuk menjadi bahan pertimbangan pada saat interview User.</li>
        <li>Setelah itu segala administrasi diberikan ke Kepala pengurus dan direksi untuk menjadi bahan pertimbangan keputusan.</li>
      </ul>
    </div>

    <div class="section">
      <h3><i class="fas fa-file-alt"></i> Lampiran</h3>
      <ul>
        <li>Form penilaian hasil interview HRD</li>
        <li>Form Penilaian hasil Interview User</li>
        <li>Form Penilaian Final Interview</li>
      </ul>
    </div>
    <p><a href="https://docs.google.com/document/d/10Iw7JTWK-Z_TeokjceQc74hdwv7Har_LwAfo9QthQD8/edit?usp=sharing" target="_blank"> Baca ketentuan selengkapnya di sini
    </a></p>
  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>
</body>
</html>
