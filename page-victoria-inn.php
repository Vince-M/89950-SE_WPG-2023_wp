<?php get_header(); ?>

  <!-- MAIN
  =================================================== -->
  <main id="main">
    <article>
      <!-- HERO
      =================================================== -->
      <div class="hero__pages" role="banner" data-type="background" data-speed="2">
        <div class="hero__image" style="background: url(<?php the_field( 'hero_image' ); ?>) no-repeat;background-position: center; background-size: cover; left: 50%; padding: 0; position: relative; -webkit-transform: translateX(-50%); transform: translateX(-50%);margin-top: 0; margin-bottom: 0px; height: 450px">
        </div>
        
        <!-- CONFERENCE INFO
        =================================================== -->
        <?php get_template_part( 'template-parts/conference-info' ); ?>
        <!-- ============================================== -->

      </div>
      <!-- ============================================== -->

      <!-- INTRO
      =================================================== -->
      <div class="wrapper containter__content row">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
          </div>
      </div>
      <!-- ============================================== -->

      <!-- SECTIONS
      =================================================== -->
      <section class="hotel fullWidth fullWidth__section fullWidth__section--reverse fullWidth__section--hotelBKGD">
          <div class="fullWidth__section--img fullWidth__section--hotel">
          </div>

          <div class="fullWidth__section--textOuter fullWidth__section--textRight">
            <div class="inner-container">
              <div class="fullWidth__section--text">
                <div class="fullWidth__section--innerWrapper fullWidth__section--hotelText">
                  <h1><?php echo esc_html( get_field('victoria_inn_heading') ); ?></h1>
                  <h2><?php echo esc_html( get_field('victoria_inn_subhead') ); ?></h2>
                  <p><?php echo esc_html( get_field('hotel_intro') ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="comfort fullWidth fullWidth__section fullWidth__section--comfortBKGD">
          <div class="fullWidth__section--img fullWidth__section--comfort"></div>
          <div class="fullWidth__section--textOuter">
            <div class="inner-container">
              <div class="fullWidth__section--text">
                <div class="fullWidth__section--innerWrapper fullWidth__section--comfortText">
                  <h2><?php echo esc_html( get_field('comfort_subhead') ); ?></h2>
                  <p><?php echo esc_html( get_field('comfort_text') ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="hotel fullWidth fullWidth__section fullWidth__section--reverse fullWidth__section--hotelBKGD">
          <div class="fullWidth__section--img fullWidth__section--restaurant">
          </div>

          <div class="fullWidth__section--textOuter fullWidth__section--textRight">
            <div class="inner-container">
              <div class="fullWidth__section--text">
                <div class="fullWidth__section--innerWrapper fullWidth__section--restaurantText">
                <h2><?php echo esc_html( get_field('restaurant_subhead') ); ?></h2>
                  <h3 class="hours"><?php echo esc_html( get_field('restaurant_meal_head') ); ?></h3>
                  <p>Daily: 7am - 11am</p>
                  <h3 class="hours"><?php echo esc_html( get_field('restaurant_lunch_head') ); ?></h3>
                    <p>Daily: 11am - 4pm</p>
                    <h3 class="hours"><?php echo esc_html( get_field('restaurant_dinner_head') ); ?></h3>
                    <p>Daily: 4pm - 10pm</p>

                    <p class="menus"><strong>View Menus</strong><br>
                      <a href="https://winnipeg.vicinn.com/wp-content/uploads/2023/07/VIW-Breakfast-Menu-WEB-20230109.pdf" target="_blank">Breakfast</a> / <a href="https://winnipeg.vicinn.com/wp-content/uploads/2023/07/VIW-Lunch-Menu-WEB-20230109.pdf" target="_blank">Lunch</a> / <a href="https://winnipeg.vicinn.com/wp-content/uploads/2023/07/VIW-Dinner-Menu-WEB-20230109.pdf" target="_blank">Dinner</a></p>

                      <h3 class="hours"><?php echo esc_html( get_field('restaurant_lounge_head') ); ?></h3>
                  <p>Monday - Saturday:  11am - 12am (Last Call at 11:30pm)<br>
                    Sunday:  11am - 11pm (last call at 10:30pm)</p>
                </div>
              </div>
            </div>
          </div>
        </section>

      <!-- VICTORIA INN BANNER
      =================================================== -->
      <section class="wrapper stay">
        <h2>Stay with us for Business or Pleasure</h2>

        <a href="https://winnipeg.vicinn.com/" target="_blank">
            <?php 
              $image = get_field('large_victoria_inn_logo');
              if( !empty( $image ) ): ?>
                  <img  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" width="480" >
            <?php endif; ?>
          </a>

      </section>
      <!-- ============================================== -->

            <!-- HORIZONTAL LINE
      =================================================== -->
      <section class="wrapper">
        <hr>
      </section>
      <!-- ============================================== -->

            <!-- SPONSOR BANNER
      =================================================== -->
      <section class="wrapper sponsorBannerFull">
          <?php 
            $image = get_field('sponsor_banner');
            if( !empty( $image ) ): ?>
                <img  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" width="100%" >
          <?php endif; ?>
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
      <?php get_template_part( 'template-parts/concert-banner' ); ?>
      <!-- ============================================== -->

      <!-- SPONSORS
      =================================================== -->
      <?php get_template_part( 'template-parts/sponsors-section' ); ?>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  