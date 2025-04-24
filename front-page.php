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

      <!-- CONFERENCE INFO
      =================================================== -->
      <?php get_template_part( 'template-parts/conference-info' ); ?>
      <!-- ============================================== -->

      </div>
      <!-- ============================================== -->

      <!-- INTRO
      =================================================== -->
      <section class="wrapper text__container intro">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <p>Sorry, no pages found</p>

        <?php endif; ?>

      </section>
      <!-- ============================================== -->

      <!-- CONFERENCE TRACKS
      =================================================== -->
      <section class="wrapper conf_tracks">
        <h2 class="visually-hidden">Conference Tracks</h2>
        <div>
          <img class="conference" src="<?php echo get_theme_file_uri() ?>/img/conference-column.jpg" alt="conference" width="390">
          <a class="track_link" href="<?php echo site_url( '/conference-schedule' ); ?>">NCR &rarr;</a>
        </div>
        <div>
          <img class="pharmacy" src="<?php echo get_theme_file_uri() ?>/img/pharmacy-column.jpg" alt="pharmacy" width="390">
          <a class="track_link" href="<?php echo site_url( '/pharmacy-schedule' ); ?>">Pharmacy &rarr;</a>
        </div>
        <div>
          <img class="trade-show" src="<?php echo get_theme_file_uri() ?>/img/trade_show-column.jpg" alt="trade-show" width="390">
          <a class="track_link" href="<?php echo site_url( '/trade-show-rotations' ); ?>">Trade Show Rotations &rarr;</a>
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
          <!-- <img src="<?php echo get_theme_file_uri() ?>/img/AlanDoyle_Concert_index_1000x1237.jpg" alt="Alan Doyle" width="490"> -->
          <?php 
              $image = get_field('concert_photo');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>
        </div>
        <div class="index-info">
          <div class="concert-logo">
            <img src="<?php echo get_theme_file_uri() ?>/img/WPG-concert-series-white_860x319.png" alt="Concert Series" width="200">
          </div>
          <div class="concert-name">
            <!-- <img src="img/alan_doyle_type.svg" alt="Alan Doyle" width="525"> -->
            <?php 
              $image = get_field('artist_logo');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" width="525" />
            <?php endif; ?>
          </div>
          <div class="concert-date">
            <!-- <img src="img/concert_date.svg" alt="Concert Date" width="240"> -->
                <h2>May 29<sup>th</sup>, 2025</h2>
                <h3>Victoria Inn</h3>
                <h3>Winnipeg, MB</h3>
          </div>
          <div class="concert-support">
            <img src="<?php echo get_theme_file_uri() ?>/img/concert-support.svg" alt="Support HHF" width="140">
          </div>
          <div class="btn btn__moreInfo nav__link">
            <a class="btn btn__moreInfo nav__link" href="<?php echo site_url( '/wpg-concert-series' ); ?>">More Info</a>
          </div>
        </div>
      </section>
      <!-- ============================================== -->

      <!-- SPONSORS
      =================================================== -->
      <?php get_template_part( 'template-parts/sponsors-section' ); ?>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  