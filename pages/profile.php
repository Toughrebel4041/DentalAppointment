<style>
  body {
    font-family: 'Arial', sans-serif;
  }

  .centered-image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
  }

  .centered-image {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10%;
  }

  .img-thumbnail {
    border-radius: 30%;
  }

  .dentist-wrapper .card-body img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  }

  .carousel-inner img {
    width: 100%;
    height: 500px;
    object-fit: cover;
  }

  .carousel-caption h5,
  .carousel-caption p {
    color: black;
    font-weight: bolder;
  }

  header {
    background-color: black;
    color: #fff;
    text-align: center;
  }

  header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5em;
  }

  main {
    padding: 30px;
    max-width: 1000px;
    margin: auto;
    text-align: justify;
    font-family: 'Lora', serif;
    line-height: 1.6;
  }

  footer {
    background-color: grey;
    color: black;
    text-align: center;
    padding: 20px;
  }
</style>
</head>

<body>
  <header id="profil">
    <h1>SSR Dental Clinic</h1>
  </header>
  <div class="centered-image-container">
    <img src="https://miro.medium.com/v2/resize:fit:2800/0*4qdnnZsmWtl0Z8Rf.jpg" alt="Centered Image" class="centered-image img-fluid">
  </div>
  <main>
    <p>
      SSR Dental Clinic adalah Klinik Pertama yang didirikan oleh mahasiswa dari Program Studi Ilmu Komputer Universitas Ary Ginanjar yang melayani perawatan gigi, berdiri sejak April 2024 oleh drg.Raihan Sultan, Raditya Aiman, dan Suryandari Puspita dengan cita-cita "keren banget yakan anak komputer bikin klink gini". Sejak masa kuliah, drg. Raihan Sultan, Raditya Aiman, dan Suryandari Puspita aktif mengikuti berbagai kegiatan bakti sosial dari acara di Jabodetabek sampai ke wilayah Tengah dan Timur Indonesia sekalipun.
    </p>

    <p>
      Saat ini SSR Dental hanya memiliki satu klinik original, hanya di Jalan Tb. Simatupang, Cilandak, Jakarta Selatan. Kami berkomitmen untuk selalu memberikan pelayanan dan perawatan gigi terbaik bagi setiap pasien melalui tim dokter gigi yang terlatih dan berpengalaman, peralatan medis yang canggih, fasilitas yang nyaman, pelayanan yang ramah, dan tentunya dengan harga yang terjangkau, juga ada sentuhan codingannya dikit.
    </p>

    <p>
      Visi kami adalah untuk dapat memberikan pelayanan dan perawatan gigi terbaik dengan harga terjangkau, sehingga kesehatan gigi dapat diakses oleh masyarakat. Selain itu kami juga selalu berusaha memberikan kenyamanan bagi pasien mulai dari pemberian informasi, cara reservasi, dan pengalaman perawatan.
    </p>

    <p>
      Kami juga memiliki program 'SSR Mengabdi' yaitu pengabdian masyarakat dari mahasiswa Computer Science untuk mengedukasi betapa pentingnya melakukan perawatan gigi kepada masyarakat Indonesia luas. Program ini merupakan bentuk komitmen kepedulian kami dalam melakukan edukasi, pelayanan dan perawatan kepada masyarakat.
    </p>

    <p>
      <strong>Legalitas Klinik:</strong><br>
      Penanggung Jawab: drg. Raihan Sultan, Raditya Aiman, dan Suryandari Puspita<br>
      Surat Izin Praktek (SIP): 0123456789<br>
      Izin Operational Klinik: Terverifikasi
    </p>

    <br><br><br>
    <br><br><br>
    <header>
      <div id="dentistprofile">
        <h1>Meet Our Dentist's</h1>
      </div>
    </header>
    <div class="dentist-wrapper">
      <h2 class="text-center mb-3">Spesialis Tambal Gigi</h2>
      <div class="text-center mx-auto mb-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Raihan Sultan Pasha Basuki</h5>
                <img src="https://media.licdn.com/dms/image/D5603AQEALmZwW2oc4A/profile-displayphoto-shrink_800_800/0/1692865198786?e=1720051200&v=beta&t=mk7gfUTHicXqUYK4mrxLFAwH01OcruNtF8CQtHKKxWE" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Raihan merupakan seorang spesialis tambal gigi yang mahir dalam menangani kerusakan gigi akibat karies</p>
                <a href="index.php?p=profiledrg#raihan" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Suryandari Puspita Hartiati</h5>
                <img src="https://media.licdn.com/dms/image/D5603AQFWCyFhP1TUZg/profile-displayphoto-shrink_400_400/0/1717168612779?e=1722470400&v=beta&t=tVTacKsp8b5RlhKxqSDRAcXj9tiUrM5mlcQArf9vKAo" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Suryandari dikenal karena pendekatannya yang ramah dan teliti dalam perawatan gigi berlubang.</p>
                <a href="index.php?p=profiledrg#surya" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Raditya Aiman Permana</h5>
                <img src="Foto Radi.jpg" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Aiman berfokus pada pemulihan struktur gigi yang rusak dengan teknik modern dan bahan berkualitas tinggi</p>
                <a href="index.php?p=profiledrg#radi" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Ahmad Marioale Sulolipu</h5>
                <img src="https://scontent.fcgk4-4.fna.fbcdn.net/v/t1.18169-9/10482593_487541774722754_8953259003322339041_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHgXyT5R637uABIc3v2JvjElUuFrvCULhaVS4Wu8JQuFk_f3L4WjhwaRsFOwkY6d181aviR64iJtwDmfkIrW8Ss&_nc_ohc=l3TGP8qKi5AQ7kNvgGpalTJ&_nc_ht=scontent.fcgk4-4.fna&oh=00_AYAHJJRab1NUcwv9BKvNtd7BvpTLs0h9RlTSlxaEX2TD6A&oe=668169A8" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Mario memiliki keahlian spesifik dalam perawatan tambalan gigi yang presisi dan estetis demi kenyamanan pasien.</p>
                <a href="index.php?p=profiledrg#mario" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center mb-3">Spesialis Estetika Gigi</h2>
      <div class="text-center mx-auto mb-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Muhammad Yahya</h5>
                <img src="https://scontent.fcgk4-2.fna.fbcdn.net/v/t39.30808-1/285728928_707401853889939_7567600931586379314_n.jpg?stp=dst-jpg_p200x200&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHTKdGX9dAKLr0yYbGU8qrGmJoLd_ROGfKYmgt39E4Z8gRVINj_UEYBDmXBzIq7e_Z_cbC65t9v3Vqphvzf8_lo&_nc_ohc=P-KsBMrwaMEQ7kNvgFoQlYI&_nc_ht=scontent.fcgk4-2.fna&oh=00_AYAa8rTgqk_WIIyHYEmxhi_4i4c_6qde46PtzyuNJKu3XQ&oe=666A276C" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Yahya spesialis estetika gigi yang berfokus pada peningkatan penampilan senyuman pasien, seperti veneer, pemutihan gigi, dan pemasangan mahkota gigi.</p>
                <a href="index.php?p=profiledrg#yahya" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Kinanty Kusuma</h5>
                <img src="foto kinan.jpg" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Kinan menawarkan solusi komprehensif untuk memperbaiki senyuman pasien. Dari pemutihan gigi hingga pembentukan ulang gigi, beliau memastikan hasil yang memuaskan.</p>
                <a href="index.php?p=profiledrg#kinan" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Nilla Aristya Untarry</h5>
                <img src="https://media.licdn.com/dms/image/D5603AQH6HH0t_zB_BQ/profile-displayphoto-shrink_800_800/0/1694852059647?e=2147483647&v=beta&t=zxmbPMYgPHxmoj1sCyfinKGFsMuxYYqSTZSxkI6bw8Q" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Nilla ahli dalam berbagai prosedur estetika gigi, termasuk pemutihan gigi dan pemasangan veneer. Beliau mengutamakan kenyamanan dan kepuasan pasien.</p>
                <a href="index.php?p=profiledrg#nilla" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Drg. Muhammad Said Abbas</h5>
                <img src="foto abbas.jpg" class="img-thumbnail" alt="...">
                <p class="card-text">Drg. Abbas memiliki keahlian dalam mempercantik senyuman, seperti veneer, bonding, dan kontur gigi, pasien dijamin mencapai senyuman yang menawan.</p>
                <a href="index.php?p=profiledrg#abbas" class="btn btn-primary">More Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
    <br><br><br>
    <header>
      <div id="facilities">
        <h1>Our Facilities</h1>
      </div>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://interiordesign.id/wp-content/uploads/2017/10/ruang-tungguA-1.jpg" class="d-block w-100" alt="Ruang Tunggu Pasien">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Tunggu Pasien</h5>
            <p>Pasien dapat menunggu dan duduk dengan nyaman</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://interiorsoloraya.com/wp-content/uploads/2023/07/ruang-tunngu-desain-anak.jpg" class="d-block w-100" alt="Ruang Bermain Anak">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Bermain Anak</h5>
            <p>Pasien dapat menitipkan anaknya untuk bermain sembari konsultasi dan terdapat petugas yang berjaga untuk menemani buah hati anda</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://3.bp.blogspot.com/-rVbDOdniwtc/V7tCaNo08yI/AAAAAAAABgc/KmdUxA7h0Go-H5_7Q5iIz_P25fr0QugQwCLcB/s1600/2016_0822_10160100.jpg" class="d-block w-100" alt="Ruang Praktek dan Tindakan">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Praktek dan Tindakan</h5>
            <p>Ruang praktek dimana dokter akan melakukan tindakan terhadap pasien</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://vredeburg.id/images/1_02072019034444.JPG" class="d-block w-100" alt="Area Parkir">
          <div class="carousel-caption d-none d-md-block">
            <h5>Area Parkir</h5>
            <p>Area parkir yang luas serta aman</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/originals/f9/6e/8d/f96e8d8897b43a9362492b608715b4ae.jpg" class="d-block w-100" alt="Toilet">
          <div class="carousel-caption d-none d-md-block">
            <h5>Toilet</h5>
            <p>Toilet yang bersih demi kenyamanan pasien</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.adsttc.com/media/images/58cb/1407/e58e/cec1/a900/0330/large_jpg/22._INTERIOR_9.jpg?1489703936" class="d-block w-100" alt="Musholla">
          <div class="carousel-caption d-none d-md-block">
            <h5>Musholla</h5>
            <p>Musholla yang bersih dan nyaman untuk ibadah pasien</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://smartmama.com/wp-content/uploads/2016/07/FX.jpg" class="d-block w-100" alt="Ruang Menyusui">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Menyusui</h5>
            <p>Ruang menyusui untuk pasien yang membawa bayi</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.udoctor.co.id/wp-content/uploads/2020/12/Metode-Sterilisasi-Kesehatan.jpg" class="d-block w-100" alt="Sterilisasi Alat">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sterilisasi Alat</h5>
            <p>Alat-alat yang digunakan selalu dalam keadaan steril</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br><br><br>
    <br><br><br>
    <header>
      <div id="contact">
        <h1>Contact Us</h1>
      </div>
      </header>
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Get to know us soon!</h5>
          <p class="card-text">
            SSR Dental Clinic Merawat Senyum Anda dengan Cinta dan Komitmen!! </p>
            <ul class="list-unstyled">
            <li><strong>WhatsApp:</strong> <a href="https://wa.link/w5umle">+6285691887072</a></li>
            <li><strong>Email:</strong> <a href="mailto:suryandaripuspita.hartiati@students.esqbs.ac.id">SSRClicic@gmail.com</a></li>
            <li><strong>Instagram:</strong> <a href="https://www.instagram.com/radityanddi?igsh=MXJpb2I0bGQ1ejZqMA==">@SSRDentalClinic</a></li>
            <li><strong>Alamat:</strong> Menara 165 Jalan. T.B. Simatupang, Jakarta Selatan, DKI Jakarta 12560</li>
        </ul>
          <a href="index.php?p=home" class="btn btn-info">Back to home</a>
        </div>
      </div>
  </main>
