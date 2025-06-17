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
      }

      .hero img {
        width: 100%;
        height: 180px;
        object-fit: cover;
      }

      .container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
      }

      h1 {
        color: #0a9f3d;
        text-align: center;
        margin-bottom: 30px;
        font-size: 32px;
      }

      section {
        margin-bottom: 40px;
      }

      section h2 {
        color: #087a2e;
        font-size: 20px;
        margin-bottom: 10px;
        border-bottom: 2px solid #c7e6b2;
        padding-bottom: 5px;
      }

      ul {
        margin-top: 10px;
        padding-left: 20px;
      }

      .question {
        margin-bottom: 20px;
        padding: 15px;
        border-left: 4px solid #0a9f3d;
        background-color: #f9f9f2;
        border-radius: 10px;
      }

      .question strong {
        color: #0a9f3d;
        display: block;
        margin-bottom: 5px;
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


    <main class="container">
      <h1>SYARAT DAN KETENTUAN REIMBURSEMENT</h1>

        <div class="question">
          <strong> 1. Reimbursement yaitu semua bentuk penggunaan biaya oleh karyawan untuk kebutuhan perusahaan selain 
Reimbursement Perjalanan Dinas atau biaya lainnya  yang sudah diatur dalam ketentuan lain.</strong></div>

        <div class="question">
          <strong> 2. Reimbursement hanya diberikan untuk biaya-biaya yang terkait langsung dengan pelaksanaan tugas dan 
tanggung jawab karyawan, serta telah disetujui sebelumnya oleh atasan yang berwenang.</strong>
        </div>

        <div class="question">
          <strong> 3. Biaya yang dapat dilakukan reimbursement diantaranya : Biaya meeting, biaya pembelian perlengkapan, 
biaya hiburan, serta biaya lainnya yang mungkin timbul saat melaksanakan tugas dan tanggung jawab.</strong>
        </div>

        <div class="question">
          <strong> 4. Sebelum diajukan ke Divisi Finance, reimbursement harus sudah mendapat persetujuan oleh atasan.</strong>
        </div>

        <div class="question">
          <strong> 5. Pengajuan reimbursement harus dilakukan dalam jangka waktu maksimal 14 hari kerja, setelah tanggal 
terjadinya pengeluaran. Keterlambatan pengajuan dapat menyebabkan penolakan reimbursement.</strong>
        </div>

        <div class="question">
          <strong> 6. Formulir (Permohonan Reimbursement Biaya) dikirimkan melalui email: argabumiindonesia@gmail.
 com dan cc ke : amaliarahma.arga@gmail.com.</strong>
        </div>

        <div class="question">
          <strong> 7. Pengajuan Reimbursement diterima oleh Divisi Finance paling lambat setiap hari Selasa pukul 23.59 
WIB, untuk selanjutnya dilakukan review pada hari Rabu.</strong>
        </div>

        <div class="question">
          <strong> 8. Apabila pengajuan dikirimkan lewat dari waktu yang telah ditentukan, maka review akan dilakukan pada hari Rabu, minggu selanjutnya.</strong>
        </div>

        <div class="question">
          <strong> 9.  Apabila terdapat revisi atas pengajuan reimbursement, maka karyawan terkait harus mengirimkan revisi 
paling lambat pada hari Rabu pukul 23.59 WIB. Jika revisi melewati batas waktu yang ditentukan maka 
pencairan akan dilakukan di minggu selanjutnya.</strong>
        </div>

        <div class="question">
          <strong> 10.  Segala bentuk biaya yang timbul harus disertai dengan :
 <Br>a Bukti transaksi (nota/invoice/faktur/kuitansi/dll), jika tidak disertai bukti transaksi maka penggunaan 
dana dianggap tidak sah.</Br>
  <Br>b Dokumentasi/foto pelaksanaan program yang terdapat timestamp dan maps.</Br>
  <Br>c Bukti transaksi dan dokumentasi/foto sebagaimana tercantum dalam poin (a) dan (b) disusun dalam 
bentuk lampiran dengan format</Br> </strong>
        </div>

        <div class="question">
          <strong> 11. Perusahaan berhak menolak pengajuan reimbursement apabila :
 <Br>a Bukti transaksi (nota/invoice/faktur/kuitansi/dll), jika tidak disertai bukti transaksi maka penggunaan 
dana dianggap tidak sah.</Br>
 <Br>b Dokumentasi/foto pelaksanaan program yang terdapat timestamp dan maps.</Br>
<Br> c Bukti transaksi dan dokumentasi/foto sebagaimana tercantum dalam poin (a) dan (b) disusun dalam 
bentuk lampiran dengan format .pdf sebagaimana contoh pada link berikut :
 Contoh Lampiran.pdf</Br>
<Br> d Karyawan melanggar kebijakan dan prosedur perusahaan.</Br></strong>
        </div>

        <div class="question">
          <strong> 12. Biaya-biaya yang tidak dapat di-reimburse :
 <Br>a Biaya pribadi (misalnya, hiburan pribadi, hadiah untuk keluarga, dll.).</Br>
 <Br>b Biaya yang sudah ditanggung oleh perusahaan.</Br>
 <Br>c Biaya yang melanggar hukum atau etika.</Br>
 <Br>d Biaya lain-lain yang tidak sesuai dengan kebijakan perusahaan. </Br></strong>
        </div>

        <div class="question">
          <strong> 13. Pencairan Reimbursement dilakukan setiap hari Kamis</strong>
        </div>

        <div class="question">
          <strong> 14. Penyalahgunaan dana atau pelanggaran prosedur dapat dikenai sanksi sesuai peraturan perusahaan.</strong>
        </div>

        <div class="question">
          <strong> 15.  Pemohon bertanggung jawab penuh atas kebenaran dan keabsahan informasi yang tercantum dalam 
formulir reimbursement dan dokumen pendukung.</strong>
        </div>

        <div class="question">
          <strong> 16.   Penyalahgunaan dana atau pelanggaran prosedur dapat dikenai sanksi sesuai peraturan perusahaan.</strong>
        </div>

        <div class="question">
          <strong> 17.  Perusahaan berhak mengubah dan memperbarui syarat dan ketentuan reimbursement biaya sewaktu
waktu tanpa pemberitahuan sebelumnya.</strong>
        </div>

        <div class="question">
          <strong> 18.   Karyawan wajib memahami dan mematuhi syarat dan ketentuan ini</strong>
        </div>

        <div class="signature-section">
          <center><div class="date-location">PT Arga Bumi Indonesia</div></center>

         <div class="signature-row">
            <div class="signature-col">
              <p class="jabatan">Di Buat Oleh:</p>
              <br> <br> <br>
              <p class="sign-name"> Amalia Rahma Putri <br>  (Finance)</p>
            </div>

            <div class="signature-col">
              <p class="jabatan"> Disetujui oleh:</p>
              <br> <br> <br>
              <p class="sign-name bold">Ikhwan Ferdian Widiarto <br>  (Direktur Utama)</p>
            </div>
      </section>
    </main>

    <footer style="background-color: #c7e6b2; text-align: center; padding: 20px;">
      <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
    </footer>
  </body>
</html>

