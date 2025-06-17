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
    .download-section {
  text-align: center;
  margin-top: 30px;
}

.btn-download {
  background-color: #0a9f3d;
  color: white;
  padding: 12px 20px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
  transition: background-color 0.2s;
}

.btn-download:hover {
  background-color: #087a2e;
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

  <section style="background-color: #fff; padding: 40px 30px; max-width: 900px; margin: 40px auto; border-radius: 12px; box-shadow: 0 0 10px rgba(0,0,0,0.1); font-family: 'Poppins', sans-serif; color: #000;">
  <h2 style="text-align: center; text-transform: uppercase; margin-bottom: 5px;">BERITA ACARA PINJAM-PAKAI</h2>
  <p style="text-align: center; margin-bottom: 30px;">No : ……………………………</p>

  <p style="margin-bottom: 20px;">
    Pada Hari ...... Tanggal ......., Kami yang bertanda tangan di bawah ini masing-masing :
  </p>

  <ol style="margin-left: 20px; line-height: 1.8;">
    <li>
      <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
      <p>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
      <p>Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
      <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>(PIHAK PERTAMA)</strong></p>
    </li>
    <br>
    <li>
      <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
      <p>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
      <p>Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
      <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>(PIHAK KEDUA)</strong></p>
    </li>
  </ol>

  <p style="margin-top: 20px;">
    Dalam Rangka menunjang kelancaran tugas dan ketertiban ………… di PT Arga Bumi indonesia, maka PIHAK PERTAMA telah menyerahkan kepada PIHAK KEDUA
  </p>

  <h4 style="margin-top: 30px;">A. Laptop dengan nomor aset : ………………</h4>
  <p>Dalam kondisi baik dengan spesifikasi sebagai berikut :</p>

  <table style="width: 100%; border-collapse: collapse; margin-top: 10px; text-align: center;">
    <thead style="background-color: #c7e6b2;">
      <tr>
        <th style="border: 1px solid #000; padding: 8px;">No</th>
        <th style="border: 1px solid #000; padding: 8px;">Nama</th>
        <th style="border: 1px solid #000; padding: 8px;">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr><td style="border: 1px solid #000; padding: 8px;">1</td><td style="border: 1px solid #000; padding: 8px;">Processor/VGA</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">2</td><td style="border: 1px solid #000; padding: 8px;">RAM</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">3</td><td style="border: 1px solid #000; padding: 8px;">Hardisk</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">4</td><td style="border: 1px solid #000; padding: 8px;">Layar</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">5</td><td style="border: 1px solid #000; padding: 8px;">Warna</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">6</td><td style="border: 1px solid #000; padding: 8px;">Serial Number</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">7</td><td style="border: 1px solid #000; padding: 8px;">Lain-Lain</td><td style="border: 1px solid #000;"></td></tr>
    </tbody>
  </table>

  <h4 style="margin-top: 30px;">B. TAB dengan nomer aset ……….. (dikosongkan)</h4>
  <p>Dalam kondisi baik dengan spesifikasi sebagai berikut :</p>

  <table style="width: 100%; border-collapse: collapse; margin-top: 10px; text-align: center;">
    <thead style="background-color: #c7e6b2;">
      <tr>
        <th style="border: 1px solid #000; padding: 8px;">No</th>
        <th style="border: 1px solid #000; padding: 8px;">Nama</th>
        <th style="border: 1px solid #000; padding: 8px;">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr><td style="border: 1px solid #000; padding: 8px;">1</td><td style="border: 1px solid #000; padding: 8px;">Processor/VGA</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">2</td><td style="border: 1px solid #000; padding: 8px;">RAM</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">3</td><td style="border: 1px solid #000; padding: 8px;">Hardisk</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">4</td><td style="border: 1px solid #000; padding: 8px;">Layar</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">5</td><td style="border: 1px solid #000; padding: 8px;">Warna</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">6</td><td style="border: 1px solid #000; padding: 8px;">Serial Number</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">7</td><td style="border: 1px solid #000; padding: 8px;">Lain-Lain</td><td style="border: 1px solid #000;"></td></tr>
    </tbody>
  </table>

  <h4 style="margin-top: 30px;">C. Handphone kantor  dengan nomer aset ……………… (dikosongkan)</h4>
  <p>Dalam kondisi baik dengan spesifikasi sebagai berikut :</p>

  <table style="width: 100%; border-collapse: collapse; margin-top: 10px; text-align: center;">
    <thead style="background-color: #c7e6b2;">
      <tr>
        <th style="border: 1px solid #000; padding: 8px;">No</th>
        <th style="border: 1px solid #000; padding: 8px;">Nama</th>
        <th style="border: 1px solid #000; padding: 8px;">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr><td style="border: 1px solid #000; padding: 8px;">1</td><td style="border: 1px solid #000; padding: 8px;">Processor/VGA</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">2</td><td style="border: 1px solid #000; padding: 8px;">RAM</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">3</td><td style="border: 1px solid #000; padding: 8px;">Hardisk</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">4</td><td style="border: 1px solid #000; padding: 8px;">Layar</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">5</td><td style="border: 1px solid #000; padding: 8px;">Warna</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">6</td><td style="border: 1px solid #000; padding: 8px;">Serial Number</td><td style="border: 1px solid #000;"></td></tr>
      <tr><td style="border: 1px solid #000; padding: 8px;">7</td><td style="border: 1px solid #000; padding: 8px;">Lain-Lain</td><td style="border: 1px solid #000;"></td></tr>
    </tbody>
  </table>
  <h4 style="margin-top: 30px;">(HAPUS TABLE JIKA TIDAK PERLU)</h4>
<p style="margin-top: 20px;">
    Selanjutnya segala biaya pemeliharaan, perbaikan dan sebagainya ditanggung oleh PIHAK KEDUA, dan terhitung sejak Berita Acara Pinjam Pakai ini ditandatangani segala tugas /kewajiban serta tanggung jawab atas pengelolaan barang tersebut beralih dari PIHAK PERTAMA kepada PIHAK KEDUA. <br> Demikian Berita Acara Pinjam Pakai ini dibuat dan ditandatangani untuk dipergunakan sebagaimana mestinya. 
  </p>

  <div class="signature-row">
            <div class="signature-col">
              <br><p class="jabatan">PIHAK KEDUA</p>
              <br> <br>
              <p class="sign-name">Nama Karyawan <br> Jabatan</p>
            </div>

            <div class="signature-col">
              <br><p class="jabatan">PIHAK PERTAMA</p>
              <br> <br>
              <p class="sign-name bold">Ine Lavranzka <br> Human Capital  </p>
            </div>

    <div class="download-section">
  <a href="Dokumen/FORMAT SURAT ASET.docx" class="btn-download" download>
    <i class="fas fa-file-download"></i> Unduh Dokumen
  </a>
</div>

</section>


  <footer>
    <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
  </footer>

</body>
</html>
