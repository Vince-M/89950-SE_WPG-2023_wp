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
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NX924D7T');</script>
<!-- End Google Tag Manager -->


  <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX924D7T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <a href="#main" class="visually-hidden">Skip to main content</a>

  <!-- HEADER / NAVIGATION SECTION START
  =================================================== -->
  <header class="header masthead">
    <div class="overlay has-fade"></div>
    <!-- overlay has-fade -->

    <div class="wrapper header__section">
      <nav class="nav" role="navigation" aria-label="Main">
        
        <!-- header__logo start -->
        <div class="header__logo site-branding">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/img/head-logo.svg" alt="home" width="140">
          </a>
        </div>
        <!-- header__logo end -->

        <!-- hamburger menu -->
        <a id="btnHamburger" class="hamburger header__toggle hide-for-desktop" href="#" role="button">
          <span></span>
          <span></span>
          <span></span>
        </a> <!-- nav__toggle header__menu hide-for-desktop -->

        <!-- header menu -->
        <div class="header__nav hide-for-mobile">
          <div class="nav navbar header__menu" role="navigation">

          
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
              <a class="btn btn__contact nav__link" href="<?php echo site_url( '/contact' ); ?>">Contact</a>
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