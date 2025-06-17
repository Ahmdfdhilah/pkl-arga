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
      display: flex;
      align-items: flex-start;
      background: #ffffff;
      border-radius: 12px;
      padding: 25px;
      margin-bottom: 30px;
      border-left: 5px solid #0a9f3d;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
      transition: transform 0.2s ease, box-shadow 0.3s ease;
    }

    .sop-block:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
    }

    .sop-icon {
      font-size: 28px;
      color: #0a9f3d;
      margin-right: 20px;
      margin-top: 5px;
    }

    .sop-content {
      flex: 1;
    }

    .sop-subtitle {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #0a9f3d;
    }

    .sop-block p {
      font-size: 16px;
      line-height: 1.7;
      text-align: justify;
      margin: 0;
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
      margin-left: 0;
      margin-top: 5px;
    }

    .signature-col:nth-child(2) .signature-img {
      margin-left: -15px;
      margin-right: auto;
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
    .sop-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 1em;
}
.sop-table th, .sop-table td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}
.sop-table thead {
  background-color: #f0f0f0;
}
.text-right {
  text-align: right;
}
.approval-box {
  display: flex;
  justify-content: space-between;
  margin-top: 2em;
}
.approval-section {
  width: 45%;
  text-align: center;
}
.ttd-box {
  height: 80px;
  border: 1px dashed #ccc;
  margin: 1em 0;
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
      <h1 class="sop-title">SOP PROGRAM</h1>

      <div class="sop-block">
  <div class="sop-icon"><i class="fas fa-bullseye"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">Tujuan SOP Pengajuan Program</h2>
    <p>Adapun SOP ini bertujuan untuk pembuatan beberapa program kerja untuk mendukung tercapainya tujuan dari divisi atau organisasi.</p>
  </div>
</div>

<div class="sop-block">
  <div class="sop-icon"><i class="fas fa-tasks"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">Prosedur Pembuatan Proposal Program Kerja</h2>
    <p><span class="bold">1. Identifikasi Kebutuhan dan Tujuan</span><br>
    a. Analisis kebutuhan: Tentukan masalah atau peluang yang ingin diselesaikan atau dicapai oleh program ini.<br>
    b. Tentukan tujuan: Menentukan tujuan yang spesifik, terukur, dapat dicapai, relevan dan berbatas waktu (SMART).</p>

    <p><span class="bold">2. Tentukan Sasaran Program</span><br>
    Tentukan yang menjadi target atau penerima manfaat program (misalkan karyawan, petani, dll).</p>

    <p><span class="bold">3. Rancangan Konsep Program</span><br>
    Nama program & deskripsi singkat mengenai apa yang dilakukan oleh program ini. Metode atau prosedur pelaksanaan (Online, Offline, atau kombinasi).</p>

    <p><span class="bold">4. Buat Rencana Kerja</span><br>
    a. Penyusunan aktivitas utama: pembuatan daftar kegiatan yang diperlukan untuk menjalankan program yang diajukan.<br>
    b. Tentukan timeline pelaksanaan.<br>
    c. Sumber daya yang terlibat seperti tenaga kerja, dana dan fasilitas apa saja yang diperlukan.<br>
    d. Anggaran yang dikeluarkan selama program tersebut dilakukan.</p>
  </div>
</div>

<div class="sop-block">
  <div class="sop-icon"><i class="fas fa-paper-plane"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">Prosedur Pengajuan Program</h2>
    <p><span class="bold">1.</span> Pembuatan program ini harus diketahui oleh Human Capital dan disetujui oleh <span class="bold">Head of Division</span>. Oleh karena itu, dari karyawan yang mengajukan harus memiliki persetujuan melalui tanda tangan dokumen yang dikonfirmasi melalui email ke <span class="bold">Head of Division</span> dan ke: <a href="mailto:ikhwanferian.arga@gmail.com">ikhwanferian.arga@gmail.com</a> dan <a href="mailto:inejuliana@arga.com">inejuliana@arga.com</a>.</p>

    <p><span class="bold">2.</span> Head of Division mengisi ke Finance jika konsep dan surat program tersebut sudah diterima terkait ketika ada yang diajukan dengan mengunggah program tersebut ke email Finance dan cc kepada Human Capital dengan email: <a href="mailto:ikhwanferian.arga@gmail.com">ikhwanferian.arga@gmail.com</a></p>

    <p><span class="bold">3.</span> Setelah itu, segala prosedur pengajuan mengikuti SOP finance yang berlaku terkait keuangan program.</p>

    <p><span class="bold">4.</span> Estimasi waktu yang dilakukan untuk pengajuan adalah sekitar 7 hari untuk proses program. Hal ini digunakan agar <span class="bold">Head of Division</span> dan pihak finance memiliki waktu memeriksa detail program secara menyeluruh dan memberi waktu untuk proses revisi jika dibutuhkan.</p>

    <p><span class="bold">5.</span> Setelah adanya proses finalisasi yang telah dilakukan dan adanya proses approval dari atasan dengan melampirkan bukti autentik berupa tanda tangan atau screenshoot. Maka <span class="bold">Head of Division</span> yang email ke finance terkait permintaan anggaran kegiatan. Selain itu, langkah selanjutnya mengikuti SOP yang telah dibuat oleh pihak finance.</p>
  </div>
</div>


<div class="sop-block">
  <div class="sop-icon"><i class="fas fa-chalkboard-teacher"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">Contoh Program: Pengajuan Program Training Karyawan</h2>
    
    <p><span class="bold">A. Tujuan Program Training Workspace</span><br>
    1. Meningkatkan kemampuan secara teknis karyawan.</p>

    <p><span class="bold">B. Analisis Kebutuhan Training Karyawan</span><br>
    1. Dari kemampuan secara teknis, karyawan merasa kurang menguasai beberapa kemampuan teknis seperti <em>google workspace</em>, Excel, dan lain-lain.<br>
    2. Meningkatkan efisiensi jika karyawan memiliki keterampilan teknis maupun sosial dalam bekerja.</p>

    <p><span class="bold">C. Sasaran Program Training Karyawan</span><br>
    Karyawan dengan semua level dengan level Staff, level SPV sampai level Managerial.</p>

    <p><span class="bold">D. Rancangan Konsep Program Pelatihan</span><br>
    1. Nama program: Pelatihan Google <em>Workspace</em><br>
    2. Pelatihan <em>google workspace</em> adalah pelatihan terkait kemampuan teknis menggunakan google sheets dimana aplikasi berbasis web yang dilakukan secara online dengan beberapa fitur, word maupun excel di dalamnya.<br>
    3. Metode pelaksanaan yang dilakukan secara <strong>online</strong> dengan link :<br>
    <a href="https://pijarmahir.id/course/mahir-google-workspace-untuk-kinerja-individu-te" target="_blank">https://pijarmahir.id/course/mahir-google-workspace-untuk-kinerja-individu-te</a><br>
    4. Pelatihan dilakukan dengan proses online sehingga karyawan mampu belajar meskipun tidak dalam lokasi yang sama.<br>
    5. Dikarenakan metode online serta pentingnya untuk memastikan karyawan memiliki waktu yang sama maka, HC / Human Capital membuat satu waktu untuk mensinergikan program ini berjalan dengan baik.
    </p>

    <ul>
      <li>Rencana Pelaksanaan : Akhir Maret 2025</li>
      <li>Pelaksana : Online</li>
      <li>Waktu Pelaksanaan : Jam 10.00 WIB – 12.00 WIB</li>
    </ul>

    <p><span class="">6. Materi Pelatihan yang diberikan berupa :</span></p>
    <ul>
      <li>Mengenal produk google Workspace dan memahami fitur-fitur utama untuk berkolaborasi dengan tim</li>
      <li>Memahami fitur produk email untuk komunikasi</li>
      <li>Memahami fitur produk meeting dan scheduling</li>
      <li>Menjelaskan produk drive, file storage, collaboration dan docs - google slide dan google doc</li>
      <li>Mendalami fitur produk file storage, collaboration dan docs</li>
      <li>Post test</li>
      <li>Sertifikat</li>
    </ul>
  </div>
</div>

<div class="sop-block">
  <div class="sop-icon"><i class="fas fa-money-check-alt"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">E. RAB (Rancangan Anggaran Biaya) yang Dikeluarkan</h2>
    <p>Program pelatihan yang dibuat berkisar <strong>Rp 175.000/orang</strong></p>
    
    <table class="sop-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Karyawan</th>
          <th>Jabatan</th>
          <th>Harga Pelatihan</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Ikhwan Ferdiansyah</td><td>Direktur Utama</td><td>Rp 175.000</td></tr>
        <tr><td>2</td><td>Cipta Panji</td><td>Manager Procurement</td><td>Rp 175.000</td></tr>
        <tr><td>3</td><td>Haniefan Muslim</td><td>Manager Commercial</td><td>Rp 175.000</td></tr>
        <tr><td>4</td><td>Ine Layna Azka</td><td><em>Human Capital</em></td><td>Rp 175.000</td></tr>
        <tr><td>5</td><td>Amalia Rahma Putri</td><td><em>Finance</em></td><td>Rp 175.000</td></tr>
        <tr><td>6</td><td>Zam-Zami</td><td>Accounting & Tax</td><td>Rp 175.000</td></tr>
        <tr><td>7</td><td>Robihan</td><td><em>Agronomist</em></td><td>Rp 175.000</td></tr>
        <tr><td>8</td><td>Rahmat Imam Setiadi</td><td><em>Agronomist</em></td><td>Rp 175.000</td></tr>
        <tr><td>9</td><td>Giarto</td><td><em>Account Executive</em></td><td>Rp 175.000</td></tr>
        <tr><td>10</td><td>Deni Pernando</td><td>Administrasi Side</td><td>Rp 175.000</td></tr>
        <tr><td>11</td><td>Beni Nardo</td><td>Administrasi Side</td><td>Rp 175.000</td></tr>
        <tr><td>12</td><td>M Fazar Kurniawan</td><td>Administrasi Side</td><td>Rp 175.000</td></tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" class="text-right"><strong>Total</strong></td>
          <td><strong>Rp 2.275.000</strong></td>
        </tr>
      </tfoot>
    </table>

    <br>

    <p><strong>Tanggal Pengajuan:</strong> ………./Bulan/Tahun</p>

    <div class="approval-box">
      <div class="approval-section">
        <p class="bold">Diajukan Oleh</p>
        <p class="ttd-box">[Tanda Tangan]</p>
        <p>Ine Layna Azka<br><em>HC / Jabatan</em></p>
      </div>
      <div class="approval-section">
        <p class="bold">Disetujui Oleh</p>
        <p class="ttd-box">[Tanda Tangan]</p>
        <p>Nama<br><em>Head of Division</em></p>
      </div>
    </div>
  </div>
</div>

<div class="sop-block">
  <div class="sop-icon"><i class="fas fa-clipboard-list"></i></div>
  <div class="sop-content">
    <h2 class="sop-subtitle">SOP PELAPORAN PROGRAM ATAU KEGIATAN</h2>

    <h3>A. DEFINISI</h3>
    <p>Semua aktivitas atau kegiatan yang direncanakan dan dilaksanakan oleh organisasi.</p>

    <h3>B. TUJUAN</h3>
    <p>Adapun pelaporan realisasi program adalah untuk mengukur realisasi kegiatan yang dilakukan secara terstruktur, tepat waktu, dan sesuai dengan standar organisasi.</p>

    <h3>C. RUANG LINGKUP</h3>
    <p>SOP ini berlaku untuk semua karyawan yang bertanggung jawab dalam penyusunan laporan atau kegiatan yang diselenggarakan.</p>

    <h3>D. PENANGGUNG JAWAB</h3>
    <ul>
      <li><strong>Pelaksana Kegiatan:</strong> Mengumpulkan data dan menyusun Laporan</li>
      <li><strong>Head of Division:</strong> Memberikan persetujuan akhir dan arahan terkait Laporan</li>
    </ul>

    <h3>E. PROSEDUR KERJA - Melakukan Penyusunan Laporan</h3>
    <p>Tuliskan laporan secara lengkap dengan struktur sebagai berikut:</p>
    <ol>
      <li><strong>Pendahuluan:</strong> Deskripsi kegiatan</li>
      <li><strong>Pelaksanaan:</strong> Tanggal, waktu, lokasi, peserta dan pelaksanaan kegiatan</li>
      <li><strong>Hasil:</strong> Output dan outcome kegiatan, termasuk capaian target</li>
      <li><strong>Kendala:</strong> Uraikan masalah yang dihadapi selama kegiatan berlangsung</li>
      <li><strong>Rekomendasi:</strong> Saran untuk perbaikan di masa depan</li>
      <li><strong>Lampiran:</strong> Foto kegiatan, dokumen pendukung atau bukti pengeluaran</li>
    </ol>

    <h3>F. WAKTU PELAPORAN</h3>
    <p>Laporan diserahkan maksimal 7 hari kerja setelah kegiatan selesai.</p>

    <h3>G. INDIKATOR KEBERHASILAN</h3>
    <ol>
      <li>Laporan selesai tepat waktu sesuai batas waktu yang ditentukan</li>
      <li>Laporan memuat informasi lengkap sesuai format standar</li>
      <li>Laporan terdokumentasi rapi seperti:
        <ul>
          <li>Nota-nota pembelian makanan, barang dan lain sebagainya</li>
          <li>Absensi atau evidence yang mendukung</li>
          <li>Dokumentasi kegiatan minimal 3 dengan camera time stamp</li>
        </ul>
      </li>
    </ol>

    <h3>H. ATURAN LAINNYA</h3>
    <ol>
      <li>Setelah pembuatan laporan realisasi program yang telah dilaksanakan, maka karyawan perlu mengunggah laporan ini ke link</li>
      <li>Lalu, jika pada proses realisasi program memakai dana perusahaan maka pelaporan yang tertera harus detail dan rinci. Jika ada kekurangan dana yang diajukan dengan realisasi program, maka karyawan bisa melakukan reimbursement dengan melampirkan bukti bukti yang mendukung seperti nota</li>
      <li>Disisi lain, jika karyawan memiliki kelebihan dana perusahaan maka karyawan wajib untuk mengembalikan dana perusahaan ke ..................... dengan melampirkan data yang mendukung dan rincian biaya.</li>
    </ol>
  </div>
</div>

  </section>

  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
