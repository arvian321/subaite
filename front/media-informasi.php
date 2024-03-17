<?php require_once 'layout/header.php';?>
<?php require_once 'layout/navbar.php';?>
<style>
  /* CSS untuk gambar membesar saat hover */
  /* CSS untuk tampilan gambar diset 30% di sisi kiri dan sisi kanan untuk konten berita */
  /* Menjadikan struktur tampilan gambar dan detail berita menjadi flexbox */
.news-item {
    display: flex;
    flex-direction: column; /* Merubah orientasi menjadi kolom */
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f3f5fa;
}

.news-img {
    width: 100%; /* Mengatur lebar gambar menjadi 100% dari parent container */
    height: auto; /* Mempertahankan aspek rasio gambar */
    object-fit: cover;
    object-position: left;
    transition: transform 0.3s ease-in-out;
    margin: 5px;
    width:100%;
}

.news-img:hover {
    transform: scale(1.1);
}

.news-details {
    padding: 5px;
    background-color: #ffffff;
    text-align: center; /* Menyusun judul berita ke tengah */
}

.news-details h3 {
    margin-top: 0;
    font-size: 16px; /* Mengatur ukuran font menjadi 24px */
    font-family: 'Poppins', sans-serif; /* Menggunakan jenis font Poppins */
    font-weight: bold; /* Membuat teks tombol menjadi tebal */
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
              <h2 style="color: #0b1ea0; text-align: center; ">Media Informasi</h2>
              <!-- Kolom Pencarian -->
              <div class="search-container">
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Cari berita..." class="search-input">
                    <button id="search-btn" class="search-btn"><i class="fas fa-search"></i> Cari</button>
                </div>
                <br>
              </div>
              <!-- Daftar List Berita -->
              <div class="row news-list" id="newsList" style="justify-content: center; float:center;">
                  <!-- ... Daftar berita ... -->
              </div>
              <div class="row news-list" id="newsListDetail">
                  <!-- ... Daftar berita ... -->
              </div>
          </div>
      </section>
  </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://standarpangan.pom.go.id/media/custom_files/js/Chart.min.js"></script> 

<script>
    // Data Berita
    const berita = [
        {
            judul: '<i class="fas fa-chart-bar"></i> Info Grafis',
            ringkasan: 'Info Grafis adalah',
            gambar: '/assets/galeri/infografis.png',
            link: 'infografis'
        },
        {
            judul: '<i class="fas fa-video"></i> Video',
            ringkasan: 'Video adalah',
            gambar: '/assets/galeri/video.png',
            link: 'video'
        },
        {
            judul: '<i class="fas fa-headphones"></i> Podcast',
            ringkasan: 'Podcast adalah',
            gambar: '/assets/galeri/podcast.png',
            link: 'podcast'
        },
        {
            judul: '<i class="fas fa-file-alt"></i> Leaflet',
            ringkasan: 'Leaflet adalah',
            gambar: '/assets/galeri/leaflet.png',
            link: 'leaflet'
        },
        {
            judul: '<i class="fas fa-book"></i> Booklet',
            ringkasan: 'Booklet adalah',
            gambar: '/assets/galeri/booklet.png',
            link: 'booklet'
        }
        // Tambahkan berita lainnya di sini
    ];

    function tampilkanBerita(beritaArr) {
    const newsList = document.getElementById('newsList');
    newsList.innerHTML = '';

    // Menentukan jumlah item yang akan ditampilkan per baris (dalam hal ini lima)
    const itemsPerRow = 5;
    const totalBerita = beritaArr.length;
    const totalRows = Math.ceil(totalBerita / itemsPerRow);

    for (let i = 0; i < totalRows; i++) {
        const row = document.createElement('div');
        row.classList.add('row', 'mx-auto', 'd-flex', 'justify-content-center'); // Menambahkan kelas 'd-flex' dan 'justify-content-center' untuk flexbox

        for (let j = i * itemsPerRow; j < Math.min((i + 1) * itemsPerRow, totalBerita); j++) {
            const berita = beritaArr[j];
            const col = document.createElement('div');
            col.classList.add('col-lg-2', 'col-md-2', 'col-sm-12', 'col-xs-12', 'news-item', 'text-center');

            col.innerHTML = `
            <div class="news-item item-233" onclick="getMenu(this,'${berita.link}')">
                <img src="${berita.gambar}" alt="Gambar Berita ${j + 1}" class="img-fluid news-img" data-id="${j + 1}">
                <div class="news-details">
                    <h3 class="berita-judul">${berita.judul}</h3>
                </div>
            </div>

            `;

            row.appendChild(col);

            // Menambahkan event listener untuk setiap judul berita
            const judulBerita = col.querySelector('.berita-judul');
            judulBerita.addEventListener('mouseenter', function () {
                judulBerita.style.color = '#1e56dc'; // Mengubah warna tulisan menjadi biru ketika kursor mendekati
            });

            judulBerita.addEventListener('mouseleave', function () {
                judulBerita.style.color = ''; // Mengembalikan warna tulisan ke semula setelah kursor meninggalkan judul berita
            });
        }

        newsList.appendChild(row);
    }
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


  <script type="text/javascript">
     
    function getMenu(obj,link){
      $(".item-233").removeClass("active");
      $.get("galeri/"+link+".php", function(data, status){
        $('#newsListDetail').html(data);
        $(obj).addClass("active");
      });
      
    }

    function getMenu1(obj,link){
      $(".item-175").removeClass("active");
      $.get("standar-pelayanan/"+link+".php", function(data, status){
        $('#t3-content').html(data);
        $(obj).addClass("active");
      });
    }

    function getMenu2(obj,link){
      $(".item-512").removeClass("active");
      $.get("cild-pelayanan/"+link+".php", function(data, status){
        $('#cild-pelayanan').html(data);
        $(obj).addClass("active");
      });
    }
  </script>

  <?php require_once 'layout/footer.php';?>