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
      <h1>SOP EXIT INTERVIEW</h1>

      <section>
        <h2>Tujuan</h2>
        <ul>
          <li>Meningkatkan Atrisi karyawan saat ini</li>
          <li>Sebagai materi evaluasi</li>
          <li>Mengungkapkan Konflik yang terjadi</li>
          <li>Menjaga Budaya kerja positif</li>
        </ul>
      </section>

      <section>
        <h2>Ruang Lingkup</h2>
        <p>Human Resource Development, karyawan</p>
      </section>

      <section>
        <h2>Definisi</h2>
        <p>Exit interview adalah cara yang baik untuk mengakhiri hubungan antara karyawan dan perusahaan. Oleh karena itu, wawancara ini biasanya dilakukan tepat sebelum hari terakhir karyawan tersebut di perusahaan. Tidak harus bertatap muka langsung, wawancara keluar dapat dilakukan melalui telepon, ataupun video konferensi.</p>
      </section>

      <section>
        <h2>Prosedur</h2>
        <p>HRD menanyakan beberapa pertanyaan wawancara</p>
        <p>Berikut link form <a href="https://forms.gle/UBgA3ozH8dsqcLWj8" target="_blank">exit Interview</a> </p> <br>

        <div class="question">
          <strong>Apa alasan yang membuat anda memutuskan untuk meninggalkan perusahaan?</strong>
          Jawaban karyawan dapat memberikan wawasan tentang masalah yang mungkin perlu diatasi perusahaan Anda. Seperti konflik dengan atasan atau rekan kerja, kurangnya komunikasi dan kesempatan pengembangan karier, atau ketidakpuasan terhadap kebijakan yang dibangun
        </div>

        <div class="question">
          <strong>Sejak kapan Anda mulai mencari kesempatan lain?</strong>
          Pertanyaan ini dapat memberikan wawasan tentang waktu spesifik di mana karyawan merasakan ketidakpuasan dan dengan memahaminya perusahaan dapat melakukan evaluasi
        </div>

        <div class="question">
          <strong>Bagaimana pengalaman Anda dengan manajemen?</strong>
          mengetahui pandangan karyawan tentang gaya manajemen perusahaan dan bagaimana hal ini mempengaruhi keputusan pengunduran diri mereka.
        </div>

        <div class="question">
          <strong>Hal apa yang Anda sukai dan tidak sukai dari perusahaan ini?</strong>
          Membantu perusahaan mengevaluasi kebijakan untuk meningkatkan pengalaman kerja.
        </div>

        <div class="question">
          <strong>Apakah perusahaan ini berhasil membantu Anda berkembang?</strong>
          Mengevaluasi apakah perusahaan telah berhasil dalam membantu karyawan untuk berkembang dalam pekerjaan mereka. Jawaban karyawan dapat memberikan informasi tentang pelatihan, pengembangan keterampilan, dan dukungan yang mereka terima dari perusahaan.
        </div>

        <div class="question">
          <strong>Bagaimana hubungan Anda dengan atasan dan rekan kerja di sini?</strong>
          Untuk mengetahui bagaimana karyawan berinteraksi dengan rekan kerja dan atasan mereka selama bekerja di perusahaan. Jawaban karyawan dapat memberikan wawasan tentang budaya kerja perusahaan dan hubungan interpersonal yang terbangun.
        </div>

        <div class="question">
          <strong>Apa suka dan duka selama bekerja di perusahaan ini?</strong>
          Jawaban karyawan dapat memberikan informasi tentang hal-hal yang disukai dan tidak disukai tentang perusahaan. Seperti kebijakan, prosedur, atau lingkungan kerja. Ini dapat membantu HR untuk memahami perspektif karyawan dan mengevaluasi upaya untuk meningkatkan kualitas dari aspek-aspek tersebut.
        </div>

        <div class="question">
          <strong>Apakah Anda memiliki saran untuk perbaikan kualitas manajemen?</strong>
          Untuk mendapatkan masukan dari karyawan mengenai bagaimana perusahaan dapat meningkatkan kualitas manajemennya. Baik dari segi kualitas kepemimpinan, komunikasi dengan karyawan, atau cara memberikan umpan balik yang lebih efektif.
        </div>

        <div class="question">
          <strong>Apakah Anda merasa kontribusi Anda dihargai dan menerima feedback yang jelas?</strong>
          membantu untuk mengevaluasi apakah perusahaan berhasil membuat karyawan merasa dihargai, didengar, dan menerima umpan balik yang dibutuhkan
        </div>

        <div class="question">
          <strong>Apakah Anda merasa telah menerima pelatihan yang lengkap untuk peran Anda?</strong>
          membantu untuk mengevaluasi apakah perusahaan telah memberikan pelatihan yang cukup dan sesuai kebutuhan karyawan dalam melaksanakan pekerjaan.
        </div>

        <div class="question">
          <strong>Apakah perusahaan kami mendukung tujuan profesional Anda?</strong>
          Pertanyaan ini membantu untuk mengevaluasi apakah perusahaan memberikan dukungan dan peluang karir yang memadai bagi karyawan. Jawaban karyawan dapat memberikan informasi apakah perusahaan telah memberikan program pengembangan keterampilan, promosi, atau peluang transisi ke peran yang berbeda.
        </div>

        <div class="question">
          <strong>Kapan saat Anda merasa bangga bekerja disini? Bisa berikan contoh?</strong>
          Pertanyaan ini membantu untuk mengetahui pengalaman positif karyawan selama bekerja di perusahaan. Jawaban karyawan dapat memberikan informasi tentang aspek manajemen yang berjalan baik dan dapat perusahaan teruskan kedepannya.
        </div>

        <div class="question">
          <strong>Apa yang hal ditawarkan oleh perusahaan baru Anda yang tidak kami miliki?</strong>
          Pertanyaan ini membantu untuk mengidentifikasi apa yang perusahaan lain tawarkan dan yang tidak dimiliki perusahaan Anda. Wawasan atas pertanyaan ini dapat membuat perusahaan meningkatkan program, kebijakan, atau kebijakan manajemen yang lebih baik dan menarik untuk mempertahankan karyawan.
        </div>

        <div class="question">
          <strong>Akankah Anda merekomendasikan perusahaan ini kepada orang lain?</strong>
          Pertanyaan ini membantu untuk mengevaluasi kepuasan karyawan secara keseluruhan. Jawaban atas pertanyaan ini dapat memberikan informasi aspek positif apa yang dimiliki perusahaan sehingga berpotensi untuk direkomendasikan.
        </div>

        <div class="question">
          <strong>Apa hal diperlukan agar membuat Anda tetap bekerja di sini?</strong>
          Pertanyaan ini membantu untuk mengevaluasi faktor apa yang dapat mempengaruhi karyawan untuk tetap bekerja di perusahaan. Jawaban atas pertanyaan inilah yang kemudian dapat perusahaan realisasikan sebagai upaya meningkatkan employee engagement.
        </div>
      </section>
    </main>

    <footer style="background-color: #c7e6b2; text-align: center; padding: 20px;">
      <p>© 2025 PT. Arga Bumi Indonesia | <a href="#">Privacy Policy</a></p>
    </footer>
  </body>
</html>