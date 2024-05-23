<?php get_header(); ?>

  <!-- MAIN
  =================================================== -->
  <main id="main">
    <article>
      <!-- HERO
      =================================================== -->
      <div class="hero__pages" role="banner" data-type="background" data-speed="2">
      <div class="hero__image" style="background: url(<?php the_field( 'index_hero' ); ?>) no-repeat;background-position: center; background-size: cover; left: 50%; padding: 0; position: relative; -webkit-transform: translateX(-50%); transform: translateX(-50%);margin-top: 0; margin-bottom: 0px; height: 450px">
        </div>
        <div class="wrapper hero__index">
          <div class="hero__indexContent">
            <div class="hero__content">
              <div class="hero__branding">
                <img src="<?php echo get_theme_file_uri() ?>/img/hero_branding.svg" alt="WPG logo" class="hero-brand">
              </div> <!-- hero__branding -->
              <div class="hero__info">
                <p class="hero__date">June 8 - 13, 2024</p>
                <p class="hero__location">
                  <span class="hero__hotel">Victoria Inn</span><br>
                  <span class="hero__place">Hotel & Conference Centre<br>
                  Winnipeg, Manitoba</span></p>
              </div> <!-- hero__info -->
            </div> <!-- hero__content -->
          </div> <!-- hero__index -->
        </div> <!-- wrapper -->
      </div>
      <!-- ============================================== -->

      <!-- INTRO
      =================================================== -->
      <section class="wrapper text__container intro">
        <h1>The North West Company Conference & Trade Show</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </section>
      <!-- ============================================== -->

      <!-- CONFERENCE TRACKS
      =================================================== -->
      <section class="wrapper conf_tracks">
        <h2 class="visually-hidden">Conference Tracks</h2>
        <div>
          <img class="conference" src="img/conference-column-min.jpg" alt="conference" width="390">
          <a class="track_link" href="#">Conference &rarr;</a>
        </div>
        <div>
          <img class="pharmacy" src="img/pharmacy-column-min.jpg" alt="pharmacy" width="390">
          <a class="track_link" href="#">Pharmacy &rarr;</a>
        </div>
        <div>
          <img class="trade-show" src="img/trade_show-column-min.jpg" alt="trade-show" width="390">
          <a class="track_link" href="#">Trade Show Rotations &rarr;</a>
        </div>
      </section>
      <!-- ============================================== -->

      <!-- HORIZONTAL LINE
      =================================================== -->
      <section class="wrapper">
        <hr>
      </section>
      <!-- ============================================== -->

      <!-- CONCERT SERIES
      =================================================== -->
      <section class="wrapper concert-index">
        <h2 class="visually-hidden">NWC Concert Series</h2>
        <div class="doyle-index">
          <img src="img/AlanDoyle_Concert_index_1000x1237.jpg" alt="Alan Doyle" width="490">
        </div>
        <div class="index-info">
          <div class="concert-logo">
            <img src="img/concert_series_white.svg" alt="Concert Series" width="200">
          </div>
          <div class="concert-name">
            <img src="img/alan_doyle_type.svg" alt="Alan Doyle" width="525">
          </div>
          <div class="concert-date">
            <img src="img/concert_date.svg" alt="Concert Date" width="240">
          </div>
          <div class="concert-support">
            <img src="img/concert-support.svg" alt="Support HHF" width="140">
          </div>
          <div class="btn btn__moreInfo nav__link">
            <a class="btn btn__moreInfo nav__link" href="#">More Info</a>
          </div>
        </div>
      </section>
      <!-- ============================================== -->

      <!-- SPONSORS
      =================================================== -->
      <section class="wrapper sponsors">
        <div class="sponsors__banner">
          <h2>Conference & Trade Show Sponsors</h2>
        </div>
        <h3 class="sponsors__head">Nor'Westors</h3>
        <div class="sponsors__norWester">
          <div class="sponsors__norWester--logos">
            <a href="https://cokecanada.com/" target="_blank">
              <img src="img/coca-cola_204x89-min.jpg" alt="Coca Cola Canada Bottling Limited" width="204">
            </a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://www.corporate.nestle.ca/en" target="_blank">
              <img src="img/nestle_173x137.svg" alt="Nestle Canada" width="173">
            </a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://www.pepsico.ca/" target="_blank">
              <img src="img/arctic-pepsi_183x81.svg" alt="Arctic Ice, Pepsi Co. and Frito Lay" width="183">
            </a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://hqfinefoods.com/" target="_blank">
              <img src="img/HQ-Fine-Foods_187x95svg.svg" alt="HQ Fine Foods" width="187">
            </a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://dufresne.ca/" target="_blank">
              <img src="img/dufresne_200x32.svg" alt="Dufresne" width="242" height="38">
            </a>
          </div>
        </div>

        <h3 class="sponsors__head">The Fur Traders</h3>
        <div class="sponsors__furTrader">
          <div class="sponsors__furTrader--logos">
            <a href="#">
              <img src="img/wonderbrands_399x65.svg" alt="Wonderbrands" width="230">
            </a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.mapleleaffoods.com/" target="_blank">
              <img src="img/maple-leaf_112x120.svg" alt="Maple Leaf Foods" width="90">
            </a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.olddutchfoods.ca/" target="_blank">
              <img src="img/oldDutch_300x223.svg" alt="Old Dutch" width="194" height="145">
            </a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://pg.ca/en-ca/" target="_blank">
              <img src="img/Proctor-Gamble_137x137.svg" alt="P&G" width="137" height="137">
            </a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.unilever.ca/" target="_blank">
              <img class="unilever-logo" src="img/unilever_129x143.svg" alt="Unilever" width="129" height="143">
            </a>
          </div>
        </div>

        <h3 class="sponsors__head">Meal Sponsors</h3>
        <div class="sponsors__mealSponsors container row">
          <div class="sponsors__mealSponsors--logos">
            <a href="https://corpo.metro.ca/en/home.html" target="_blank">
              <img src="img/metro_235x52.svg" alt="Metro Richelieu Inc." width="235">
            </a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="https://www.sysco.ca/location/winnipeg/" target="_blank">
              <img src="img/Sysco_210x112.svg" alt="Sysco Food Services of Winnipeg" width="210">
            </a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="http://parmalat.ca/" target="_blank">
              <img src="img/lactalis_235x83.svg" alt="Lactalis Canada" width="235">
            </a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="https://wonderbrands.com/" target="_blank">
              <img src="img/wonderbrands_230x40.svg" alt="Wonderbrands" width="230">
            </a>
          </div>
        </div>
      </section>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  