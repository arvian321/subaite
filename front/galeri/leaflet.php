<style>
  /* CSS untuk gambar membesar saat hover */
  /* CSS untuk tampilan gambar diset 30% di sisi kiri dan sisi kanan untuk konten berita */
  .news-item1 {
    display: flex;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f3f5fa; /* Warna latar belakang */
  }

  .news-img1 {
    width: 30%;
    object-fit: cover;
    object-position: left;
    transition: transform 0.3s ease-in-out;
    margin: 5px;
  }

  .news-img1:hover {
    transform: scale(1.1);
  }

  .news-details1 {
    width: 70%;
    padding: 15px;
    margin: 5;
    padding-top: 0; /* Menghapus padding atas agar margin atas juga bisa terlihat */
    background-color: #ffffff; /* Warna latar belakang */
  }

  .news-details1 h3 {
    margin-top: 0;
  }

  .additional-info1 {
    display: flex;
    justify-content: space-between;
  }

  /* CSS untuk tampilan responsif */
  @media (max-width: 768px) {
    .news-item1 {
      flex-direction: column;
    }

    .news-img1 {
      width: 100%;
    }

    .news-details1 {
      width: 100%;
      padding: 5px;
      margin: 5px;
      background-color: #ffffff; /* Warna latar belakang */
      font-size: 12px; /* Mengatur ukuran font menjadi 24px */
      font-family: 'Poppins', sans-serif; /* Menggunakan jenis font Poppins */
      font-weight: bold; /* Membuat teks tombol menjadi tebal */
    }
  }
  .judul-berita{
    color: #1414b7;
    font-weight: bold;
  }
</style>

<style>
   

    /* Style tambahan untuk judul berita */
    .berita-judul {
        transition: color 0.3s ease; /* Efek transisi warna tulisan */
        cursor: pointer; 
    }
</style>
<h1 class="judul-berita">Leaflet</h1>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-item1">
              <div class="news-item1">                  
                  <br>

                  <img src="assets/img/Header.jpg" alt="Gambar Berita 1" class="img-fluid news-img1" data-id="1"> 
                  <div class="news-details1">
                      <h3 style="padding-top: 10px;" class="berita-judul"><a href="/isi-leaflet">Leaflet 1</a></h3>
                      <p>Di lingkungan produksi pangan olahan, AMR dapat terjadi akibat penggunaan antibiotik yang tidak sesuai dengan ketentuan dan faktor lingkungan yang tercemar. </p>
                      <div class="additional-info1">
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
          </div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-item1">
              <div class="news-item1">                  
                  <br>

                  <img src="assets/img/Header.jpg" alt="Gambar Berita 2" class="img-fluid news-img1" data-id="2"> 
                  <div class="news-details1">
                      <h3 style="padding-top:10px;" class="berita-judul"><a href="/isi-leaflet">Leaflet 2</a></h3>
                      <p>Mengingat besarnya potensi AMR pada lingkungan produksi pangan, pengendalian pada pangan dilakukan secara bersama.</p>
                      <div class="additional-info1">
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
          </div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-item1">
              <div class="news-item1">                  
                  <br>

                  <img src="assets/img/Header.jpg" alt="Gambar Berita 3" class="img-fluid news-img1" data-id="3"> 
                  <div class="news-details1">
                      <h3 style="padding-top:10px;" class="berita-judul"><a href="/isi-leaflet">Leaflet 3</a></h3>
                      <p>Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan</p>
                      <div class="additional-info1">
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
          </div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-item1">
              <div class="news-item1">                  
                  <br>

                  <img src="assets/img/Header.jpg" alt="Gambar Berita 4" class="img-fluid news-img1" data-id="4"> 
                  <div class="news-details1">
                      <h3 style="padding-top:10px;" class="berita-judul"><a href="/isi-leaflet">Leaflet 4</a></h3>
                      <p>Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan</p>
                      <div class="additional-info1">
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
          </div>