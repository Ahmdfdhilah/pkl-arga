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

  .container {
    max-width: 1000px;
    margin: 30px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  }

  .section {
    margin-bottom: 30px;
  }

  .section h2 {
    color: #0a9f3d;
    margin-bottom: 10px;
  }

  .section i {
    color: #0a9f3d;
    margin-right: 8px;
  }

  ul {
    margin-left: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #d1f0d4;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
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

  <div class="container">
    <h2 style="text-align: center;">KETENTUAN PROSES REKRUTMEN DAN SELEKSI KARYAWAN</h2>
    <p style="text-align:center; margin-bottom:30px;">No.006/SPK/STK-SC/II/2024</p>

    <div class="section">
      <h2><i class="fas fa-bullseye"></i>Tujuan Masa Trainee Karyawan</h2>
      <ul>
        <li>Mengenalkan lingkungan kerja kepada karyawan baru.</li>
        <li>Mencegah timbulnya gangguan psikologis karyawan saat berada di lingkungan kerja yang baru.</li>
        <li>Memastikan produktivitas dan interaksi antar karyawan berlangsung cepat.</li>
        <li>Meningkatkan rasa kepercayaan diri karyawan baru.</li>
        <li>Memberikan informasi-informasi perusahaan yang berkaitan dengan peraturan perusahaan, proses bisnis dan lain sebagainya.</li>
        <li>Karyawan lebih memahami perannya di perusahaan.</li>
      </ul>
    </div>

    <div class="section">
      <h2><i class="fas fa-book"></i>Definisi</h2>
      <p>Definisi Trainee karyawan adalah sebuah proses pengenalan yang disediakan oleh perusahaan untuk karyawan baru berupa informasi dan pemahaman terkait perusahaan beserta tujuan. Informasi-informasi yang wajib diketahui oleh karyawan baru seperti tujuan perusahaan, sejarah perusahaan, visi, misi, kebijakan atau prosedur perusahaan, kondisi sosial dan budaya perusahaan.</p>
    </div>

    <div class="section">
      <h2><i class="fas fa-user-tie"></i>Penanggung Jawab</h2>
      <p>Divisi HR dan Head Of Department PT. Arga Bumi Indonesia</p>
    </div>

    <div class="section">
      <h2><i class="fas fa-list-ul"></i>Rincian Prosedur</h2>
      <p>Karyawan memiliki waktu 1 (satu) bulan atau lebih untuk mengenal lebih dalam terkait kondisi perusahaan dengan:</p>
      <ul>
        <li><strong>Metode Pengenalan HR:</strong> HRD memperkenalkan Karyawan dengan dengan beberapa karyawan atau tim kerja. Selanjutnya karyawan diperkenalkan untuk parkir karyawan, tempat untuk membeli makan, jam istirahat. Setelah itu, HR mengadakan pertemuan singkat dengan karyawan baru untuk memastikan bahwa karyawan tersebut nyaman dan menyesuaikan diri.</li>
        <li><strong>Metode Training:</strong> Untuk memberikan Pengetahuan terkait perusahaan selama kurang lebih 3(Tiga).</li>
      </ul>
    </div>

    <div class="section">
      <h2><i class="fas fa-chalkboard-teacher"></i>Training Pengenalan Karyawan</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Topik Training</th>
            <th>PIC</th>
            <th>Jangka Waktu</th>
            <th>Metode</th>
            <th>Level Jabatan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pengenalan terkait Perusahaan PT Arga Bumi Indonesia</td>
            <td>Ketua Pengurus</td>
            <td>1-2 Kali Pertemuan</td>
            <td>Materi & Post Test</td>
            <td>Staff, SPV, Manager</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pengenalan Visi, Misi, dan Value</td>
            <td>HRD</td>
            <td>1-2 kali Pertemuan</td>
            <td>Materi & Post Test</td>
            <td>Staff, SPV, Manager</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Pengenalan terkait 7 habits</td>
            <td>HRD</td>
            <td>1 kali Pertemuan</td>
            <td>Materi & Post Test</td>
            <td>Staff, SPV</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Pengenalan Terkait Proses Bisnis</td>
            <td>Ketua Perusahaan</td>
            <td>1-2 Kali Pertemuan</td>
            <td>Materi & Post Test</td>
            <td>Staff, SPV, Manager</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="section">
      <h2><i class="fas fa-eye"></i>Metode Observasi</h2>
      <p><strong>Staff/SPV:</strong> Jika pada masa trainee karyawan baru adalah level Staff dan atau dipersiapkan untuk level SPV maka dilakukan rolling divisi. Oleh karena itu, Karyawan diberikan kesempatan selama 2 minggu untuk memahami dan mempelajari satu divisi ke divisi lain. Hal ini dilakukan agar Karyawan mengerti alur proses bisnis dan menemukan divisi yang sesuai.</p>
      <p><strong>Manager/C-Level:</strong> Disisi lain jika pada masa trainee karyawan baru adalah level Manager dan C-Level maka mereka diberikan kesempatan untuk observasi segala pekerjaan di berbagai divisi dan kinerja karyawan, tetapi tetap fokus pada divisi yang akan ditempati. Hal ini agar, karyawan pada posisi Manager dan C-Level melihat keterkaitan antar divisi dan mampu membuat strategi perusahaan yang akan dipresentasikan ke Direktur PT Arga Bumi Indonesia sebagai inisiatif solusi agar lebih produktif dan efisien.</p>
    </div>

    <div class="section">
      <h2><i class="fas fa-check-circle"></i>Evaluasi Masa Orientasi</h2>
      <p>Masa trainee yang dilakukan selama 3 bulan akan di review oleh Head of departemen, HRD dan Ketua Pengurus sehingga adanya monitoring kinerja, kesesuaian value perusahaan dan tempo pekerjaan. Evaluasi yang diberikan akan menjadikan keputusan bagi pihak manajemen untuk menerima karyawan menjadi karyawan kontrak atau menolak karyawan untuk bekerja di perusahaan.</p>
    </div>

    <div class="section">
      <h2><i class="fas fa-paperclip"></i>Lampiran</h2>
      <ul>
        <li>Modul Training</li>
        <li>Form Post Test</li>
        <li>Form Penilaian Karyawan</li>
      </ul>
    </div>
  </div>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>