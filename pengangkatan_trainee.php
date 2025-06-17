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
  
  h1, h2, h3 {
    color: #0a9f3d;
    text-align: center;
  }

  section {
    margin-bottom: 30px;
  }

  .section-title {
    margin-top: 30px;
  }

  .box {
    border: 1px solid #ccc;
    padding: 15px 25px;
    background-color: #fff;
    border-radius: 8px;
    max-width: 900px;
    margin: 0 auto;
  }

  .signature {
    margin-top: 40px;
    text-align: center;
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

  <main>
    <h1>PENGANGKATAN KARYAWAN KONTRAK<br>DARI MASA ORIENTASI KARYAWAN</h1>
    <p style="text-align:center; margin-bottom: 20px;">No: 023/SPK/SOP-SC/V/2024</p>

    <section>
      <h2 class="section-title">TUJUAN</h2>
      <div class="box">
        <ul>
          <li>A. Pemenuhan kebutuhan tenaga kerja sesuai masa percobaan</li>
          <li>B. Penegasan status kedudukan tenaga kerja</li>
        </ul>
      </div>
    </section>

    <section>
      <h2 class="section-title">RUANG LINGKUP</h2>
      <div class="box">
        <p>Prosedur ini berlaku dan ditetapkan di KJMP Setara Talenta Karya untuk:</p>
        <ul>
          <li>Pengangkatan Karyawan</li>
          <li>Adanya kepastian status, sehingga diharapkan karyawan dapat bekerja dengan tenang dan produktif</li>
        </ul>
      </div>
    </section>

    <section>
      <h2 class="section-title">DEFINISI</h2>
      <div class="box">
        <p>Pengangkatan karyawan adalah penempatan karyawan pada suatu jabatan atau pekerjaan setelah melakukan masa Trainee.</p>
      </div>
    </section>

    <section>
      <h2 class="section-title">PENANGGUNG JAWAB</h2>
      <div class="box">
        <ul>
          <li>Atasan karyawan bertanggung jawab dalam mengajukan usulan pengangkatan melalui penilaian karyawan</li>
          <li>Departemen HR bertanggung jawab atas pembuatan, penandatanganan dan pengajuan perjanjian kerja karyawan kontrak</li>
        </ul>
      </div>
    </section>

    <section>
      <h2 class="section-title">RINCIAN PROSEDUR</h2>
      <div class="box">
        <ol>
          <li>Departemen HR memberikan formulir penilaian dan rekomendasi kepada atasan yang bersangkutan selambat-lambatnya 1 (satu) bulan sebelum masa Orientasi selesai.</li>
          <li>Atasan segera mengembalikan Form Penilaian dan rekomendasi tersebut ke Departemen HR.</li>
          <li>Bila hasilnya baik dan direkomendasikan untuk diangkat, maka Departemen HR membuat kontrak karyawan dan segala macam peraturan yang ada di perusahaan untuk disepakati.</li>
          <li>Departemen HR memproses administrasi data dan mengarsipkan file data karyawan yang bersangkutan.</li>
        </ol>
      </div>
    </section>

    <section>
      <h2 class="section-title">LAMPIRAN</h2>
      <div class="box">
        <ul>
          <li>Form Penilaian</li>
          <li>Form Pengangkatan karyawan kontrak</li>
        </ul>
      </div>
    </section>

    <section>
      <h2 class="section-title">FLOWCHART</h2>
      <div class="box">
        <ul>
          <li>Flowchart</li>
        </ul>
        <section class="big-image-section" style="margin: 20px 0;">
          <img src="image/flow.png" alt="Flowchart" style="width: 100%; height: auto; display: block;" />
        </section>
      </div>
    </section>

    <section>
      <h2 class="section-title">SURAT KEPUTUSAN</h2>
      <h3>LULUS MASA PERCOBAAN</h3>
      <div class="box">
        <p><strong>Menimbang:</strong><br>
        Berdasarkan hasil penilaian kerja selama masa percobaan yang dilakukan oleh Direktur PT Arga Bumi Indonesia yang berkedudukan di Kota Bandar Lampung terhadap karyawan sebagai berikut:</p>
        <p>Nama: ___________<br>Jabatan: ___________<br>Tanggal Masuk: ……………………….. Bulan……………….. Tahun………………</p>
        <p><strong>Mengingat:</strong><br>Anggaran Dasar dan Peraturan PT Arga Bumi Indonesia, Perjanjian Kerja Waktu Tertentu</p>
        <p><strong>Memperhatikan:</strong><br>Kebutuhan Sumber Daya Manusia Perusahaan</p>
        <p><strong>Memutuskan:</strong></p>
        <ol>
          <li>Perusahaan menyatakan bahwa Karyawan telah lulus masa percobaan sebagaimana ditentukan dalam perjanjian kerja dan hubungan kerja berlanjut sesuai ketentuan kontrak.</li>
          <li>Hubungan kerja akan berlangsung untuk jangka waktu tertentu.</li>
          <li>Surat keputusan ini berlaku sejak tanggal ditetapkan dan dapat diperbaiki bila terdapat kekeliruan.</li>
        </ol>
        <div class="signature">
          <p>Ditetapkan di: ___________<br>Pada Tanggal: ___________</p>
          <p><strong>Direktur PT Arga Bumi Indonesia</strong></p>
          <p>___________________________</p>
        </div>
      </div>
    </section>

    <section>
      <h3>SURAT KEPUTUSAN PENGANGKATAN KARYAWAN TRAINEE KE KARYAWAN KONTRAK</h3>
      <div class="box">
        <p><strong>Menimbang:</strong><br>
        Berdasarkan hasil administrasi dan penilaian oleh Direktur PT Arga Bumi Indonesia di Kota Bandar Lampung terhadap:</p>
        <p>Nama: ___________<br>Alamat: ________________________________________</p>
        <p><strong>Mengingat:</strong><br>Anggaran Dasar dan Peraturan Perusahaan</p>
        <p><strong>Memperhatikan:</strong><br>Kebutuhan SDM perusahaan</p>
        <p><strong>Memutuskan:</strong></p>
        <ol>
          <li>Nama dan alamat tersebut diangkat sebagai Karyawan dengan masa waktu tertentu.</li>
          <li>Pengangkatan berlaku dengan ketentuan:<br>
              Jabatan: ___________<br>
              Divisi: ___________<br>
              Tugas Pokok: ___________<br>
              Deskripsi Pekerjaan: ___________
          </li>
          <li>Upah pokok Rp. ___________ per bulan dan tunjangan lainnya.</li>
          <li>Hubungan kerja diatur dalam PKWT dan peraturan perusahaan lainnya.</li>
          <li>Surat Keputusan ini berlaku sejak ditandatangani dan dapat diperbaiki bila ada kekeliruan.</li>
        </ol>
        <div class="signature">
          <p>____________, __ _________ ____</p>
          <p><strong>Direktur PT Arga Bumi Indonesia</strong></p>
          <p>___________________________</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
