<?php require_once 'layout/header.php';?>
<?php require_once 'layout/navbar.php';?>
<?php require_once 'layout/banner-kinerja.php';?>
<main id="main">

      <!-- ======= Breadcrumbs ======= -->

      <section class="inner-page">
            <div class="container">
                  <div class="row">

                        <!-- MAIN CONTENT -->
                        <div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                              <style type="text/css">
      ol>li.list-down{
            padding: 5px;
    background: #ddd;
    border: 1px solid #aaa;
    border-radius: 3px;
    font-size: 20px;
    margin-bottom: 3px;
      }
</style>
<div id="system-message-container">
</div>

<div class="page-header">
      <h1>Rencana Kerja Tahunan</h1>
</div>
<div>
      <ol style="list-style: none;">
            <li class="list-down">
                  <a href="" download>Rencana Kerja Tahun 2024</a>
            </li>
            <li class="list-down">
                  <a href="" download>Rencana Kerja Tahun 2023</a>
            </li>
            <li class="list-down">
                  <a href="" download>Rencana Kerja Tahun 2022</a>
            </li>
            <li class="list-down">
                  <a href="" download>Rencana Kerja Tahun 2021</a>
            </li>
            <li class="list-down">
                  <a href="" download>Rencana Kerja Tahun 2020</a>
            </li>
      </ol>
</div>
                        </div>
                        <!-- //MAIN CONTENT -->

                        <?php require_once 'layout/left-kinerja.php';?>

                  </div>
            </div>
      </section>

</main><!-- End #main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
      function getMenu(obj, link) {
            $(".item-175").removeClass("active");
            $.get("/kinerja/" + link + ".php", function(data, status) {
                  $('#t3-content').html(data);
                  $(obj).addClass("active");
            });
      }
</script>

<script>

</script>
<?php require_once 'layout/footer.php';?>