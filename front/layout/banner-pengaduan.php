<!-- ======= Hero Section ======= -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
  div.mySlides {
    display: none;
    width: 100%;
  }

  .slide1 {
    background-image: url('/assets/img/konblik_ing.jpg') !important;
  }
</style>
<div class="w3-content" style="width: 100%;max-width: 100%;">

  <div class="mySlides">
    <section id="hero" class="d-flex align-items-center animate__animated  animate__fadeIn">

      <div class="container">
        <div class="row">
          <div style="height: 600px;"
            class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up" data-aos-delay="200">
            <h1>Pengaduan

            </h1>
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
  </div>
</div>
<script>
  var slideIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
      slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 4000);
  }
</script>