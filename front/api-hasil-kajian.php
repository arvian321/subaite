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
  <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
</head>
<style>
  .select2-container {
    width: 100%; /* Sesuaikan lebar dropdown sesuai kebutuhan Anda */
  }

  .select2-container .select2-selection--single {
    height: 38px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: black;
    line-height: 36px;
  }

  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 36px;
  }

  /* Gaya saat hover */
  .select2-container--default .select2-selection--single:hover {
    background-color: #f3f3f3;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered:hover {
    color: #1e56dc;
  }

  /* Gaya untuk dropdown Select2 - opsi yang dipilih */
  .select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #1e56dc !important; /* Warna latar belakang saat opsi dipilih */
    color: #fff !important; /* Warna teks */
  }

  /* Gaya untuk dropdown Select2 - latar belakang default */
  .select2-container--default .select2-selection--single {
    background-color: #fff !important; /* Warna latar belakang default */
    color: black !important; /* Warna teks */
  }

  /* Gaya untuk dropdown Select2 - opsi yang dipilih */
  .select2-container--default .select2-results__option {
    background-color: #1e56dc !important; /* Warna latar belakang saat opsi ditampilkan */
    color: #fff !important; /* Warna teks */
  }

  /* Gaya untuk dropdown Select2 - opsi saat cursor melewatinya */
  .select2-container--default .select2-results__option:hover {
    background-color: #ffffff !important; /* Warna latar belakang saat opsi dihover */
    color: #1e56dc !important; /* Warna teks */
  }

  .btn-edit {
    background-color: #28a745; /* Warna latar belakang untuk tombol Edit */
    color: #fff; /* Warna teks untuk tombol Edit */
  }

  .btn-delete {
    background-color: #dc3545; /* Warna latar belakang untuk tombol Hapus */
    color: #fff; /* Warna teks untuk tombol Hapus */
  }

  .btn-view {
    background-color: #007bff; /* Warna latar belakang untuk tombol Lihat */
    color: #fff; /* Warna teks untuk tombol Lihat */
  }

  .zoomable {
    width: 200px; /* Lebar gambar */
    height: auto; /* Sesuaikan dengan proporsi asli */
    transition: transform 0.3s ease; /* Animasi saat perubahan terjadi */
  }

  .zoomable:hover {
    transform: scale(1.2); /* Membesarkan gambar saat dihover */
  }

  #search-btn {
    width: 100%;
    padding: 2px 4px;
    border: none;
    background-color: #47b2e4;
    color: #fff;
    border-radius: 8px; /* Atur nilai border-radius sesuai keinginan */
    cursor: pointer;
    font-size: 10px;
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); /* Efek embos */
    margin-bottom: 10px; /* Menambahkan jeda di bawah tombol */
  }
</style>
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .tabs-container {
    float: left;
    width: 15%; /* Sesuaikan dengan lebar tab yang diinginkan */
  }

  .tab {
    cursor: pointer;
    padding: 10px;
    border: 1px solid #ccc;
    border-right: none;
    border-radius: 5px 0 0 5px;
    margin-bottom: 5px;
    color: #fff;
    background-color: #47b2e4;
    font-size: 16px;
    font-weight: bold;
  }

  .tab:hover {
    background-color: #ddd;
  }

  .tab.active {
    background-color: #555; /* Warna latar belakang untuk tab aktif */
  }

  .tab-content {
    margin-left: 10%; /* Sesuaikan dengan lebar tab container yang diinginkan */
    padding: 4px;
    border: 1px solid #ccc;
    border-radius: 0 1px 1px 0;
    display: none;
    flex-direction: column; /* Konten diatur menjadi kolom */
  }

  .tab-content.active {
    display: flex; /* Menampilkan konten tab aktif */
  }

  .tab-content h2 {
    margin-bottom: 10px; /* Jarak antara judul dan isi konten */
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
      <section id="services" class="services section-bg">
      <div class="container mt-4">
        <!-- Filter pencarian -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tabs-container">
              <div class="tab active" onclick="openTab('tab1')" id="tab1">Bahan Tambahan Pangan</div>
              <div class="tab" onclick="openTab('tab2')" id="tab2">Bahan Penolong</div>
              <div class="tab" onclick="openTab('tab3')" id="tab3">Bahan Penolong (Enzim)</div>
              <div class="tab" onclick="openTab('tab4')" id="tab4">BTP Perisa</div>
              <div class="tab" onclick="openTab('tab5')" id="tab5">Bahan Kontak Pangan</div>
              <div class="tab" onclick="openTab('tab6')" id="tab6">Zat Kontak Pangan</div>
              <div class="tab" onclick="openTab('tab7')" id="tab7">Senyawa Gizi dan Non Gizi</div>
              <div class="tab" onclick="openTab('tab8')" id="tab8">Klaim</div>
              <div class="tab" onclick="openTab('tab9')" id="tab9">PKGK</div>
              <div class="tab" onclick="openTab('tab10')" id="tab10">Kategori Pangan</div>
              <div class="tab" onclick="openTab('tab11')" id="tab11">Bahan Baku</div>
              <div class="tab" onclick="openTab('tab12')" id="tab12">Label Pangan Olahan</div>
              <div class="tab" onclick="openTab('tab13')" id="tab13">Bakteri dan Kultur</div>
              <div class="tab" onclick="openTab('tab14')" id="tab14">Label Gizi Pangan Olahan</div>
            </div>

            <div class="tab-content active" id="content-tab1">
              <h2>Bahan Tambahan Pangan</h2>
              <select id="filterName1">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a1';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable1" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Golongan BTP</th>
                          <th>Induk Jenis BTP</th>
                          <th>INS</th>
                          <th>Jenis BTP</th>
                          <th>No Kategori Pangan</th>
                          <th>Kategori Pangan</th>
                          <th>Batas Maksimum (mg/kg)</th>
                          <th>Keterangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b1';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_golongan"] . '</td>
                                      <td>' . $row["sub_golongan_btp"] . '</td>
                                      <td>' . $row["id_ins"] . '</td>
                                      <td>' . $row["jenis_btp"] . '</td>
                                      <td>' . $row["no_kategori_pangan"] . '</td>
                                      <td>' . $row["kategori_pangan"] . '</td>
                                      <td>' . $row["batas_maksimum"] . '</td>
                                      <td>' . $row["keterangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab2">
              <h2>Bahan Penolong</h2>
              <select id="filterName2">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a2';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable2" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Bahan Penolong</th>
                          <th>Kode Internasional (INS/CAS Number)Golongan</th>
                          <th>Bahan Penolong</th>
                          <th>Kategori Pangan</th>
                          <th>Jenis Pangan</th>
                          <th>Batas Maksimal Residu</th>
                          <th>Ketentuan Lain</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b2';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["bahan_penolong"] . '</td>
                                      <td>' . $row["kode_internasional"] . '</td>
                                      <td>' . $row["golongan_bahan_penolong"] . '</td>
                                      <td>' . $row["kategori_pangan"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                      <td>' . $row["batas_maksimal_residu"] . '</td>
                                      <td>' . $row["ketentuan_lain"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab3">
              <h2>Bahan Penolong (Enzim)</h2>
              <select id="filterName3">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a3';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable3" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Enzim</th>
                          <th>No. EC</th>
                          <th>Sumber Enzim</th>
                          <th>Batas Maksimal Residu (mg/kg)</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b3';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_enzim"] . '</td>
                                      <td>' . $row["no_ec"] . '</td>
                                      <td>' . $row["sumber_enzim"] . '</td>
                                      <td>' . $row["batas_maksimal"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab4">
              <h2>BTP Perisa</h2>
              <select id="filterName4">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a4';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable4" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Perisa</th>
                          <th>No. JECFA</th>
                          <th>No. FEMA</th>
                          <th>Kategori Pangan</th>
                          <th>Batas Maksimum</th>
                          <th>Ketentuan Lain</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b4';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_perisa"] . '</td>
                                      <td>' . $row["no_jecfa"] . '</td>
                                      <td>' . $row["no_fema"] . '</td>
                                      <td>' . $row["kategori_pangan"] . '</td>
                                      <td>' . $row["batas_maksimum"] . '</td>
                                      <td>' . $row["ketentuan_lain"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab5">
              <h2>Bahan Kontak Pangan</h2>
              <select id="filterName5">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a5';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable5" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Bahan Kontak Pangan</th>
                          <th>Batas Maksimum Migrasi</th>
                          <th>Keterangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b5';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["bahan_kontak_pangan"] . '</td>
                                      <td>' . $row["batas_maksimum_migrasi"] . '</td>
                                      <td>' . $row["keterangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab6">
              <h2>Zat Kontak Pangan</h2>
              <select id="filterName6">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a6';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable6" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Senyawa</th>
                          <th>CAS Number</th>
                          <th>Jenis Bahan Kontak Pangan</th>
                          <th>Fungsi</th>
                          <th>Batas Maksimum Migrasi</th>
                          <th>Keterangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b6';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_senyawa"] . '</td>
                                      <td>' . $row["cas_number"] . '</td>
                                      <td>' . $row["jenis_bahan_kontak_pangan"] . '</td>
                                      <td>' . $row["fungsi"] . '</td>
                                      <td>' . $row["batas_maksimum_migrasi"] . '</td>
                                      <td>' . $row["keterangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab7">
              <h2>Senyawa Gizi dan Non Gizi</h2>
              <select id="filterName7">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a7';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable7" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Senyawa Zat Gizi/Non Gizi yang Diizinkan</th>
                          <th>Persyaratan</th>
                          <th>Fungsi</th>
                          <th>Jenis Pangan</th>
                          <th>Kategori Pangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b7';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["gizi_non_gizi_yang_diijinkan"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                      <td>' . $row["fungsi"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                      <td>' . $row["katpang"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab8">
              <h2>Klaim</h2>
              <select id="filterName8">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a8';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable8" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Klaim yang Diizinkan</th>
                          <th>Persyaratan</th>
                          <th>Jenis Pangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b8';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["klaim_yang_diizinkan"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab9">
              <h2>PKGK</h2>
              <select id="filterName9">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a9';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable9" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Jenis Pangan</th>
                          <th>Persyaratan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b9';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab10">
              <h2>Kategori Pangan</h2>
              <select id="filterName10">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a10';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['idn'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable10" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>No Kategori Pangan</th>
                          <th>Kategori Pangan</th>
                          <th>Nama Jenis</th>
                          <th>Definisi</th>
                          <th>Karakteristik Dasar</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b10';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["no_katpang"] . '</td>
                                      <td>' . $row["kategori_pangan"] . '</td>
                                      <td>' . $row["nama_jenis"] . '</td>
                                      <td>' . $row["definisi"] . '</td>
                                      <td>' . $row["karakteristik_dasar"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab11">
              <h2>Bahan Baku</h2>
              <select id="filterName11">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a11';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable11" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Bahan Baku</th>
                          <th>Nama Latin</th>
                          <th>Jenis Bahan Baku</th>
                          <th>Bagian</th>
                          <th>Bentuk</th>
                          <th>Jenis Pangan</th>
                          <th>Batas Maksimum</th>
                          <th>Peringatan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b11';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_bahan_baku"] . '</td>
                                      <td>' . $row["nama_latin"] . '</td>
                                      <td>' . $row["jenis_bahan_baku"] . '</td>
                                      <td>' . $row["bagian"] . '</td>
                                      <td>' . $row["bentuk"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                      <td>' . $row["batas_maksimum"] . '</td>
                                      <td>' . $row["peringatan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab12">
              <h2>Label Pangan Olahan</h2>
              <select id="filterName12">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a12';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable12" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Informasi Label yang Diizinkan</th>
                          <th>Persyaratan</th>
                          <th>Jenis Pangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b12';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["informasi_label_yang_diizinkan"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab13">
              <h2>Bakteri dan Kultur</h2>
              <select id="filterName13">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a13';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable13" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Informasi Label yang Diizinkan</th>
                          <th>Persyaratan</th>
                          <th>Fungsi</th>
                          <th>Jenis Pangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b13';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["nama_bakteri_atau_kultur"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                      <td>' . $row["fungsi"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
            <div class="tab-content" id="content-tab14">
              <h2>Label Gizi Pangan Olahan</h2>
              <select id="filterName14">
                  <option value="">Semua Data</option>
                  <?php
                    $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=a14';
                    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                    $response = file_get_contents($url, false, $context);

                    // Mendekode data JSON
                    $data = json_decode($response, true);

                    // Memeriksa apakah dekode berhasil
                    if ($data && isset($data['data'])) {
                        // Mulai membangun opsi-opsi <option>
                        foreach ($data['data'] as $item) {
                            echo '<option value="' . $item['nma'] . '">' . $item['nma'] . '</option>';
                        }
                    } else {
                        // Menampilkan pesan jika terjadi kesalahan
                        echo 'Gagal mengambil atau mendekode data.';
                    }
                  ?>
              </select>
              <table id="myTable14" class="display" data-current-category="">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Informasi Label yang Diizinkan</th>
                          <th>Persyaratan</th>
                          <th>Jenis Pangan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $url = 'https://standarpangan.pom.go.id/apisabo/getpesanan.php?nil=5930d4943514964&cid=b14';
                        $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
                        $response = file_get_contents($url, false, $context);

                        // Mendekode data JSON
                        $data = json_decode($response, true);

                        $no = 1;
                        if (isset($data['data']) && !empty($data['data'])) {
                            foreach ($data['data'] as $row) {
                                echo '<tr>
                                      <td>' . $no++ . '</td>
                                      <td>' . $row["informasi_label_yang_dizinkan"] . '</td>
                                      <td>' . $row["persyaratan"] . '</td>
                                      <td>' . $row["jenis_pangan"] . '</td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                        }
                      ?>
                  </tbody>
              </table>
            </div>
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

  <!-- Tautan script JS Bootstrap, jQuery, dan Select2 -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
        // Inisialisasi DataTables
        loadtabelheaderawal();
    });

    function loadtabelheaderawal(){
      var i = 1;
      while (i < 15) {
        (function(i) {
        $('#myTable'+i).DataTable();
          $('#filterName'+i).select2();
          $('#filterName'+i).on('change', function () {
              var selectedValue = $(this).val();
              filterTable(selectedValue, i);
          });
        })(i);
        i++;
      }
    }

    function filterTable(selectedValue,cid) {
        var table = $('#myTable'+cid).DataTable();
        var cnil;
        switch (cid) {
            case 1:
                cnil = 1;
                break;
            case 2:
                cnil = 1;
                break;
            case 3:
                cnil = 1;
                break;
            case 4:
                cnil = 1;
                break;
            case 5:
                cnil = 1;
                break;
            case 6:
                cnil = 1;
                break;
            case 7:
                cnil = 1;
                break;
            case 8:
                cnil = 1;
                break;
            case 9:
                cnil = 1;
                break;
            case 10:
                cnil = 1;
                break;
            case 11:
                cnil = 1;
                break;
            case 12:
                cnil = 1;
                break;
            case 13:
                cnil = 1;
                break;
            case 14:
                cnil = 1;
                break;
            default:
                cnil = 1;
        }
        //var cleanedSelectedValue = selectedValue.replace(/\s/g, '').toLowerCase();
        //alert(cleanedSelectedValue);
        if (selectedValue === '') {
            table.column(cnil).search('').draw();
        } else {
            if(cid==1||cid==3||cid==5||cid==6||cid==7||cid==8||cid==11||cid==12){
              var cleanedSelectedValue = selectedValue.split(' ')[0].toLowerCase();
              table.column(cnil).search(cleanedSelectedValue ? cleanedSelectedValue : '', true, false).draw();
            }else{
              table.column(cnil).search(selectedValue ? '^' + selectedValue + '$' : '', true, false).draw();
            }
        }
    }
  </script>
  <script>
    function openTab(tabName) {
      var i, tabContent, tabs;
      tabContent = document.querySelectorAll(".tab-content");
      tabs = document.querySelectorAll(".tab");

      for (i = 0; i < tabContent.length; i++) {
        tabContent[i].classList.remove("active");
        tabs[i].classList.remove("active");
      }

      document.getElementById("content-" + tabName).classList.add("active");
      document.getElementById(tabName).classList.add("active");
    }
  </script>

  
  <!-- Vendor JS Files -->
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