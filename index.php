<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <!-- Page Title -->
  <title>Personal - Nayla</title>
  <!--/ Page Title -->

  <meta name="author" content="Pe Themes" />
  <meta name="description" content="Multi-Concept Creative Portfolio Template" />
  <meta name="keywords" content="portfolio, agency, personal, creative" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

  <link href="css/plugins.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
  <link href="css/terminal.css" rel="stylesheet" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/site-favicon.png" />
  <link rel="apple-touch-icon" href="img/site-favicon.png" />
  <!--/ Favicons -->
</head>

<body class="dark" data-barba="wrapper" style="--mainBackground: #fffbf7;--mainColor: #333333; --primaryColor: #333333; --secondaryColor: #333333;">
  <!-- Page Loader -->
  <div class="page-loader blocks down">
    <!-- Caption -->
    <div class="page-loader-caption">CODES BY DAWSON</div>
    <!-- Caption -->
  </div>
  <!--/ Page Loader -->

  <!-- Page Transitions -->
  <div class="nayla-page-transition block down capt-bottom-left offset-x">
    <!-- Caption -->
    <div class="page-transition-caption">CODES BY DAWSON</div>
    <!--/ Caption -->
  </div>
  <!-- Page Transitions -->

  <!-- Mouse Cursor -->
  <div id="mouseCursor" class="dot"></div>
  <!--/ Mouse Cursor -->

  <!-- Page -->
  <div id="page">
    <div class="menu-overlay"></div>

    <?php include "header.php"; ?>

    <!-- Main -->
    <main id="primary" class="site-main" data-barba="container">
      <!-- Page Content -->
      <div id="content" class="page-content">

        <?php include "banner2.php"; ?>

        <?php include "aboutme.php"; ?>

        <?php include "projects.php"; ?>

        <?php include "services.php"; ?>

        <?php include "techstack.php"; ?>


      </div>
      <!--/ Page Content -->
    </main>
    <!--/ Main  -->

    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!--/ Footer -->
  </div>
  <!--/ Page -->

  <script src="js/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/barba.min.js"></script>
  <script src="js/gsap.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>