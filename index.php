<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Feux HTML Template">

  <title>Feux - Agency HTML Template</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/cbd/favicon.svg">
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka:wght@500&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/all.min.css">
  <link rel="stylesheet" href="assets/vendor/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/vendor/progressbar.css">
  <link rel="stylesheet" href="assets/vendor/meanmenu.min.css">
  <link rel="stylesheet" href="assets/vendor/magnific-popup.css">
  <link rel="stylesheet" href="assets/vendor/animate.min.css">
  <link rel="stylesheet" href="assets/vendor/nice-select.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css">


</head>


<body class="body-wrapper body-creative-agency">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>

      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>


  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href='/'>
              <img src="assets/imgs/logo/logo.png" alt="site logo">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-info-box">
          <h2 class="title">Hello There!</h2>
          <p class="text">We offer comprehensive range of services to help your business thrive.</p>
          <div class="t-btn-group">
            <a class='t-btn t-btn-circle' href='/contact'>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a class='t-btn t-btn-primary' href='/contact'>Let’s Connect</a>
            <a class='t-btn t-btn-circle' href='/contact'>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="post-image">
            <img src="assets/imgs/gallery/image-48.webp" alt="image">
            <img src="assets/imgs/gallery/image-49.webp" alt="image">
            <img src="assets/imgs/gallery/image-50.webp" alt="image">
            <img src="assets/imgs/gallery/image-51.webp" alt="image">
          </div>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Information</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="text"><a href="tel:+22306965119">+2230 6965 119</a></span>
            </div>
            <div class="contact-item">
              <span class="text"><a href="mailto:feux@gmail.com">feux@gmail.com</a></span>
            </div>
            <div class="contact-item">
              <span class="text">Avenue de Roma 1588, Lisboa</span>
            </div>
          </div>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Connect Us On</h2>
          <div class="social-links">
            <a href="#">FB</a>
            <a href="#">LN</a>
            <a href="#">IN</a>
            <a href="#">BE</a>
          </div>
        </div>
        <div class="offset-logo-footer">
          <img src="assets/imgs/logo/logo-6.png" alt="image">
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->



  <!-- Header area start -->
  <?php include 'header.php'; ?>
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <main>

        <?php include 'banner.php'; ?>

        <?php include 'about.php'; ?>

        <?php include 'techstack.php'; ?>
        <?php include 'works.php'; ?>

        <?php // include 'services.php'; 
        ?>

        <?php // include 'team.php'; 
        ?>

        <?php // include 'brand.php'; 
        ?>


        <?php include 'services.php'; ?>
        <?php include 'testimonial.php'; ?>



      </main>

      <?php include 'footer.php'; ?>

    </div>
  </div>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.magnific-popup.min.js"></script>
  <script src="assets/vendor/swiper-bundle.min.js"></script>
  <script src="assets/vendor/counter.js"></script>
  <script src="assets/vendor/progressbar.js"></script>
  <script src="assets/vendor/gsap.min.js"></script>
  <script src="assets/vendor/ScrollSmoother.min.js"></script>
  <script src="assets/vendor/ScrollTrigger.min.js"></script>
  <script src="assets/vendor/SplitText.min.js"></script>
  <script src="assets/vendor/jquery.meanmenu.min.js"></script>
  <script src="assets/vendor/jquery.nice-select.min.js"></script>
  <script src="assets/vendor/backToTop.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="assets/js/nayla.js"></script> -->



</body>

</html>