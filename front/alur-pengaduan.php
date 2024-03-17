<?php require_once 'layout/header.php';?>
<?php require_once 'layout/navbar.php';?>
<?php require_once 'layout/banner-pengaduan.php';?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    

    <section class="inner-page">
      <div class="container">
        <div class="row">

          <!-- MAIN CONTENT -->
          <div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
            <div class="page-header clearfix">
    <h1 class="page-title">Alur Pengaduan</h1>
  </div>

<div class="item-page clearfix">


<!-- Article -->
<article itemscope="" itemtype="http://schema.org/Article">
  <meta itemprop="inLanguage" content="en-GB">
  <meta itemprop="url" content="/pengaduan/alur-pengaduan">
  <meta itemscope="" itemprop="mainEntityOfPage" itemtype="http://schema.org/WebPage" itemid="/pengaduan/alur-pengaduan">
    
      <meta content="2022-12-05T22:29:06+07:00" itemprop="dateModified">
  
      <meta content="2020-03-30T22:53:08+07:00" itemprop="datePublished">
  
    <span itemprop="author" style="display: none;">
    <span itemprop="name">Sabo Hermawan</span>
    <span itemtype="https://schema.org/Organization" itemscope="" itemprop="publisher" style="display: none;">
      <span itemtype="https://schema.org/ImageObject" itemscope="" itemprop="logo">
        <img style="width: 200px;" itemprop="url" alt="logo" src="/assets/img/pengaduan.png">
        <meta content="auto" itemprop="width">
        <meta content="auto" itemprop="height">
      </span>
      <meta content="Sabo Hermawan" itemprop="name">
    </span>
  </span>
    <!--e:Validate structured data-->

      <!-- Aside -->
    <!-- //Aside -->


      <meta content="Alur Pengaduan" itemprop="headline">
    
  

  
  
        
  
    
    <section class="article-content clearfix" itemprop="articleBody" style="padding-top: 10px;">
      <p>
        <img class="" src="/assets/img/pengaduan.png" alt="alur pengaduan" data-original="/assets/img/pengaduan.png" style="display: block;"><br>
        <span style="font-size: 30px;font-weight: bold;width: 450px;text-align: center;display: block;">Pedoman Pengaduan</span>
      </p>   

       </section>

    
    <!-- footer -->
        <!-- //footer -->

    
    
        
</article>
<!-- //Article -->


</div>
    </div>
          <!-- //MAIN CONTENT -->

          <?php require_once 'layout/left-pengaduan.php';?>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
     
    function getMenu(obj,link){
      $(".item-175").removeClass("active");
      $.get("/pengaduan/"+link+".php", function(data, status){
        $('#t3-content').html(data);
        $(obj).addClass("active");
      });
      
    }
  </script>

  <script>
   
</script>
  <?php require_once 'layout/footer.php';?>