<?php require_once 'layout/header.php';?>
<?php require_once 'layout/navbar.php';?>
<?php require_once 'layout/banner-pelayanan.php';?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="portfolio" class="portfolio" style="padding: 10px;">
        <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <li onclick="getMenu(this,'maklumat')" class="item-233 filter-active">Maklumat<br>Pelayanan</li>
            <li onclick="getMenu(this,'moto')" class="item-233">Moto<br>Pelayanan</li>
            <li onclick="getMenu(this,'pelaksana')" class="item-233">Pelaksana<br>Layanan</li>
            <li onclick="getMenu(this,'prosedur')" class="item-233">Standar<br>Pelayanan</li>
            <li onclick="getMenu(this,'pedoman')" class="item-233">Pedoman<br>Pelayanan</li>
            <li onclick="getMenu(this,'laporan')" class="item-233">Laporan<br>Survei</li>
            <li onclick="getMenu(this,'question')" class="item-233">Question <br>& Answer</li>
          </ul>
        </section>
  <section class="inner-page" style="padding-top: 10px;" id="content-pelayanan">
    <div class="container" style="text-align: center;">      
      <img style="margin: auto;" src="/bpom/maklumat20230620.png">
    </div>
  </section>

</main><!-- End #main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://standarpangan.pom.go.id/media/custom_files/js/Chart.min.js"></script> 
  <script type="text/javascript">
     
    function getMenu(obj,link){
      $(".item-233").removeClass("filter-active");
      $.get("pelayanan/"+link+".php", function(data, status){
        $('#content-pelayanan').html(data);
        $(obj).addClass("filter-active");
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