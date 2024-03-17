<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bpom - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="https://demo.casethemes.net/itfirm/wp-content/themes/itsoft/assets/css/itfirm-theme.min.css?ver=1.3.7"
    rel="stylesheet">
  <link href="https://demo.casethemes.net/itfirm/wp-content/themes/itsoft/assets/css/flaticon.min.css?ver=1.3.7"
    rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  /* CSS untuk gambar membesar saat hover */
  /* CSS untuk tampilan gambar diset 30% di sisi kiri dan sisi kanan untuk konten berita */
  .news-item {
    display: flex;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f3f5fa; /* Warna latar belakang */
  }

  .news-img {
    width: 50%;
    object-fit: cover;
    object-position: left;
    transition: transform 0.3s ease-in-out;
    margin: 5px;
  }

  .news-img:hover {
    transform: scale(1.1);
  }

  .news-details {
    width: 50%;
    padding: 15px;
    margin: 5;
    padding-top: 0; /* Menghapus padding atas agar margin atas juga bisa terlihat */
    background-color: #ffffff; /* Warna latar belakang */
  }

  .news-details h3 {
    margin-top: 0;
  }

  .additional-info {
    display: flex;
    justify-content: space-between;
  }

  /* CSS untuk tampilan responsif */
  @media (max-width: 768px) {
    .news-item {
      flex-direction: column;
    }

    .news-img {
      width: 100%;
    }

    .news-details {
      width: 100%;
      padding: 5px;
      margin: 5px;
      background-color: #ffffff; /* Warna latar belakang */
      font-size: 12px; /* Mengatur ukuran font menjadi 24px */
      font-family: 'Poppins', sans-serif; /* Menggunakan jenis font Poppins */
      font-weight: bold; /* Membuat teks tombol menjadi tebal */
    }
  }

</style>

<style>
    .search-container {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        margin-bottom: 20px;
    }

    .search-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .search-container {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        margin-bottom: 20px;
    }

    .search-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #search-input {
        width: 70%;
        padding: 10px;
        margin-right: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    #search-btn {
        width: 30%;
        padding: 10px 15px;
        border: none;
        background-color: #1e56dc;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Untuk layar HP dan Tablet */
    @media (max-width: 992px) {
        .search-bar {
            flex-direction: column;
        }

        #search-input,
        #search-btn {
            width: 100%;
            margin: 5px 0; /* Menambahkan margin agar tombol terpisah */
        }
    }

    /* Style tambahan untuk judul berita */
    .berita-judul {
        transition: color 0.3s ease; /* Efek transisi warna tulisan */
        cursor: pointer; 
    }
</style>

<body style="background: #f3f5fa;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="/bpom/dspo_logo.svg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/tentang-kami.html">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Standarisasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Penyusunan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pelayanan Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link   scrollto" href="#portfolio">RPID</a></li>
          <li class="dropdown"><a href="#"><span>Help Center</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang di Direktorat Standardisasi Pangan Olahan</h1>
          <h2></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">
              <h2 style="color: #0b1ea0; text-align: center; ">Video</h2>
              <!-- Kolom Pencarian -->
              <div class="search-container">
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Cari berita..." class="search-input">
                    <button id="search-btn" class="search-btn"><i class="fas fa-search"></i> Cari</button>
                </div>
                <br>
              </div>
              <!-- Daftar List Berita -->
              <div class="row news-list" id="newsList">
                  <!-- ... Daftar berita ... -->
              </div>

          </div>
      </section>
  </main>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <p><img src="/bpom/dspo_logo.svg" alt="" class="img-fluid"></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>RESOURCES</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pakar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Stakeholder</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dokumen QMS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Workshop</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>STATISTIK PENGUNJUNG</h4>
            <div class="visitorcounter ">
              <p>
                Hari ini <span class="floatright">393</span>
              </p>
              <p>
                Minggu ini <span class="floatright">393</span>
              </p>
              <p>
                Bulan ini <span class="floatright">1610</span>
              </p>
              <p>
                Total Pengunjung <span class="floatright">860474</span>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>RESOURCES</h4>
            <div class="mod-sppoll ">
              <strong>Bagaimana pendapat Anda tentang tampilan dan konten website Direktorat Standardisasi Pangan
                Olahan?</strong>
              <form class="form-sppoll" data-id="1" data-module_id="191">
                <div class="radio">
                  <label>

                    <input type="radio" name="question" value="0" checked="">
                    ★★★★★ </label>
                </div>
                <div class="radio">
                  <label>

                    <input type="radio" name="question" value="1">
                    ★★★★ </label>
                </div>
                <div class="radio">
                  <label>

                    <input type="radio" name="question" value="2">
                    ★★★ </label>
                </div>
                <div class="radio">
                  <label>

                    <input type="radio" name="question" value="3">
                    ★★ </label>
                </div>
                <div class="radio">
                  <label>

                    <input type="radio" name="question" value="4">
                    ★ </label>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="button" class="btn btn-default btn-poll-result" data-result_id="1" value="Result">
              </form>
              <div class="sppoll-results"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Kreasi Media</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Data Berita
    const berita = [
        {
            judul: 'Video 1',
            ringkasan: 'Di lingkungan produksi pangan olahan, AMR dapat terjadi akibat penggunaan antibiotik yang tidak sesuai dengan ketentuan dan faktor lingkungan yang tercemar. '
        },
        {
            judul: 'Video 2',
            ringkasan: 'Mengingat besarnya potensi AMR pada lingkungan produksi pangan, pengendalian pada pangan dilakukan secara bersama.'
        },
        {
            judul: 'Video 3',
            ringkasan: 'Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan'
        },
        {
            judul: 'Video 4',
            ringkasan: 'Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan'
        }
        // Tambahkan berita lainnya di sini
    ];

    function tampilkanBerita(beritaArr) {
      const newsList = document.getElementById('newsList');
      newsList.innerHTML = '';

      beritaArr.forEach(function (berita, index) {
          const newsItem = document.createElement('div');
          newsItem.classList.add('col-lg-6', 'col-md-6', 'col-sm-12', 'col-xs-12', 'news-item');

          newsItem.innerHTML = `
              <div class="news-item">
                  <br>
                  <img src="assets/img/Header.jpg" alt="Gambar Berita ${index + 1}" class="img-fluid news-img" data-id="${index + 1}">
                  <div class="news-details">
                      <h3 class="berita-judul">${berita.judul}</h3>
                      <p>${berita.ringkasan}</p>
                      <div class="additional-info">
                          <div class="info-left">
                              <span class="copyright">Uploaded; Nama </span>
                              <br>
                              <span class="date">27 Desember 2023</span>
                          </div>
                          <div class="info-right">
                              <i class="fas fa-eye"></i> <!-- Icon mata -->
                              <span class="viewer-counter">1000</span>
                              <br>
                              <i class="fas fa-download"></i> <!-- Icon download -->
                              <span class="viewer-counter">500</span>
                          </div>
                      </div>
                  </div>
              </div>
          `;

          newsList.appendChild(newsItem);

          // Menambahkan event listener untuk setiap judul berita
          const judulBerita = newsItem.querySelector('.berita-judul');
          judulBerita.addEventListener('mouseenter', function () {
              judulBerita.style.color = '#1e56dc'; // Mengubah warna tulisan menjadi biru ketika kursor mendekati
          });

          judulBerita.addEventListener('mouseleave', function () {
              judulBerita.style.color = ''; // Mengembalikan warna tulisan ke semula setelah kursor meninggalkan judul berita
          });
      });
    }


    // Event listener untuk pencarian saat tombol 'Cari' ditekan
    document.getElementById('search-btn').addEventListener('click', function () {
        const searchTerm = document.getElementById('search-input').value.toLowerCase();
        const filteredBerita = berita.filter(function (berita) {
            return berita.judul.toLowerCase().includes(searchTerm) || berita.ringkasan.toLowerCase().includes(searchTerm);
        });

        tampilkanBerita(filteredBerita);
    });

    // Tampilkan berita awal saat halaman dimuat
    tampilkanBerita(berita);
</script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>