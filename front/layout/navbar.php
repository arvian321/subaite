<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto" style="display: contents;"><img src="/assets/img/Logo SPO 2.svg" alt="" class="img-fluid1"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" style="min-height: 40px;margin: 0px;">      
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/front/tentang-kami">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Produk Standardisasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="mega">
              <li><a href="/front/peraturan">Regulasi ><br><small>Menyajikan Peraturan, Standar, <br>Pedoman, Code of Practice, <br>dan Peraturan Terkait Lainnya.</small></a></li>
              <li><a href="/front/hasil-kajian">Hasil Pengkajian ><br><small>Menyajikan Hasil Pengkajian <br>Keamanan, Mutu, Gizi, Manfaat <br>Label Pangan Olahan, PRG, <br>Inovasi Bahan Alam.</small></a></li>
              <li><a href="/front/produk-lainnya">Lainnya ><br><small>Menyajikan Informasi terkait <br>produk standardisasi lainnya, <br>seperti laporan sidang, <br>prosiding, dll</small></a></li>              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://standarpangan.pom.go.id/nspk/">Penyusunan</a></li>
          <li><a class="nav-link scrollto" href="/front/data-kinerja">Kinerja</a></li>
          <li><a class="nav-link   scrollto" href="/front/pelayanan-public">Pelayanan Publik</a></li>
          <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="mega">
              <li><a href="/front/regulasi-ppid">PPID ><br><small>Menyajikan Peraturan, Standar, <br>Pedoman, Code of Practice, <br>dan Peraturan Terkait Lainnya.</small></a></li>
              <li><a href="/front/list-berita">Berita ><br><small>Menyajikan Hasil Pengkajian <br>Keamanan, Mutu, Gizi, Manfaat <br>Label Pangan Olahan, PRG, <br>Inovasi Bahan Alam.</small></a></li>
              <li><a href="#">Lain-lain ><br><small>Menyajikan Informasi terkait <br>informasi publik lainnya</small></a></li>              
            </ul>
          </li>          
          <li><a class="nav-link   scrollto" href="/front/media-informasi">Media Informasi</a></li>
          <li><a class="nav-link   scrollto" href="/front/alur-pengaduan">Pengaduan</a></li>          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    
    <div class="nav-right pull-right" style="padding: 10px 20px 0px 20px; height: 50px;">
          <!-- HEAD RIGHT -->
          <div class="search">
  <form action="/" method="post" class="form-inline form-search">
    <label for="mod-search-searchword114" class="element-invisible">Search ...</label> <input name="searchword" id="mod-search-searchword" aria-label="search" maxlength="200" class="form-control search-query" type="search" placeholder="Search ...">    <input type="hidden" name="task" value="search">
    <input type="hidden" name="option" value="com_search">
    <input type="hidden" name="Itemid" value="101">
  </form>
</div>
<!-- <div id="jf_login" class="">
  
  
  <button class="jf_l_modal_trigger" data-toggle="tooltip" data-placement="bottom" title="Account"><i class="fa fa-lock"></i></button>
</div> -->
          <!-- //HEAD RIGHT -->
        </div>
        </div>
  </header><!-- End Header -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(window).resize(function(){isZooming();});
  isZooming();
  function isZooming(){
    var currFFZoom = (window.innerWidth / 1920);
    var currIEZoom = ((window.innerWidth / 1920)*100);
        currIEZoom = currIEZoom>100 ?100:currIEZoom;
    //console.log(window.innerWidth);
    if (navigator.userAgent.indexOf('Firefox') != -1 && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf('Firefox') + 8)) >= 3.6) { //Firefox
       var step = 0.02;
       currFFZoom -= step;
       var vdo=innerWidth>1920?2.7:11.1;
       //$('body').css('MozTransform', 'scale(' + currFFZoom + ')');
       $('body').attr('style','transform: scale(1);max-width:100%;margin: auto;');
       // $('footer').attr('style','transform: scale(1);max-width:'+window.innerWidth+'px;margin: auto;');
       // $('header').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       // $('#lokasi').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       // $('#software').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       // $('#fitur').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       // $('#services').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       // $('#top').attr('style','transform: scale(1);width:'+window.innerWidth+'px;margin: auto;');
       $('.videoFrame').attr('style','background: #000;margin-left: -'+vdo+'%;');
   }else if(window.innerWidth<1360){
      var step = 0;
       currIEZoom -= step;
       //$('body').attr('style','zoom:'+currIEZoom+'%;max-width:'+window.innerWidth+'px;');  
       if(window.innerWidth<1000){
        $('body').attr('style','');  
        $('.container').attr('style',''); 
       }else{
        $('body').attr('style','zoom:'+currIEZoom+'%;');  
        $('.container').attr('style','max-width:1300px;width:1300px !important;'); 
       }
       
     }else{
        $('body').attr('style','zoom:'+currIEZoom+'%;max-width:100%;');
        $('.container').attr('style','max-width:1500px;width:1500px !important;'); 
     }
  }
</script>