<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NWC Conference & Trade Show</title>

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="dist/style.css">
  <script defer src="dist/script.js"></script>

  <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
  <a href="#main" class="visually-hidden">Skip to main content</a>

  <!-- HEADER / NAVIGATION SECTION START
  =================================================== -->
  <header class="header masthead">
    <div class="overlay has-fade"></div>
    <!-- overlay has-fade -->

    <div class="wrapper header__section">
      <nav class="nav" role="navigation" aria-label="Main">
        
        <div class="header__logo site-branding">
          <a href="index.html">
            <img src="img/head-logo.svg" alt="WPG logo 2024" width="140">
          </a>
        </div>
        <!-- header__logo -->

        <a id="btnHamburger" class="hamburger header__toggle hide-for-desktop" href="#">
          <span></span>
          <span></span>
          <span></span>
        </a> <!-- nav__toggle header__menu hide-for-desktop -->

        <!-- header menu -->
        <div class="header__nav hide-for-mobile">
          <div class="header__menu">

            <?php
              wp_nav_menu( array(
                'theme_location'  =>  'header-menu',
                'depth'           =>  3,
                'container'       =>  false,
                'menu_class'      =>  'menu nav__list'
              ))
            ?>
            <!-- contact button -->
            <div class="btn btn__contact nav__link">
              <a class="btn btn__contact nav__link" href="contact.html">Contact</a>
            </div>
            <!-- contact button end -->
          </div>
        </div>
        <!-- header__nav -->
      </nav>
      <!-- nav -->
    </div>
    <!-- container header__section -->
  </header> <!-- HEADER / NAVIGATION SECTION END -->
  <!-- ============================================== -->