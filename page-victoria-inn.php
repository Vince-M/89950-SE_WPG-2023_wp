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
      <div class="wrapper containter__content row">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
          </div>
      </div>

      <section class="wrapper text__container intro">
   
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

          <?php the_content(); ?>

          <?php endwhile; else: ?>

          <p>Sorry, no pages found</p>

          <?php endif; ?>

      </section>
      <!-- ============================================== -->

      <!-- HORIZONTAL LINE
      =================================================== -->
      <section class="wrapper">
        <hr>
      </section>
      <!-- ============================================== -->

      <!-- SPONSORS
      =================================================== -->
      <section class="wrapper sponsors">
        <div class="sponsors__banner">
          <h2>Conference & Trade Show Sponsors</h2>
        </div>

        <!-- sponsors__conference--nor'westors -->
        <h2 class="pages__subhead">Nor'Westors</h2>
        <div class="sponsors__conference--norwester">
          <!-- sponsors__conference--half-width -->
          <div class="sponsors__conference--half-width">
          
            <?php 
              $image = get_field('sponsor_coca_cola_canada');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>
            
            <div class="sponsors__conference--text">
              <h2 class="sponsor-head">Coca-Cola Canada Bottling Limited </h2>
              
              <a class="sponsor-url" href="https://cokecanada.com/" target="_blank">cokecanada.com</a >
            </div>
          </div>

          <!-- sponsors__conference--half-width -->
          <div class="sponsors__conference--half-width">
            <?php 
              $image = get_field('sponsor_nestle_canada');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>
            
            <div class="sponsors__conference--text">
              <h2 class="sponsor-head"> Nestle Canda</h2>

              <a class="sponsor-url" href="https://www.corporate.nestle.ca/en" target="_blank">corporate.nestle.ca/en</a>
            </div>
          </div>

          <!-- sponsors__conference--half-width -->
          <div class="sponsors__conference--half-width">
            <?php 
              $image = get_field('sponsor_arctic_ice');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>

            <div class="sponsors__conference--text">
              <h2 class="sponsor-head">PepsiCo Foods (Frito Lay) & Arctic Beverages </h2>

              <a class="sponsor-url" href="https://www.pepsico.ca/" target="_blank">pepsico.ca</a>
            </div>
          </div>

          <!-- sponsors__conference--half-width -->
          <div class="sponsors__conference--half-width">
            <?php 
              $image = get_field('sponsor_hq');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>

            <div class="sponsors__conference--text">
              <h2 class="sponsor-head">HQ Fine Foods </h2>

              <a class="sponsor-url" href="https://hqfinefoods.com/" target="_blank">hqfinefoods.com</a>
            </div>
          </div>

          <!-- sponsors__conference--half-width -->
          <div class="sponsors__conference--half-width">
            <?php 
              $image = get_field('sponsor_dufresne');
              if( !empty( $image ) ): ?>
                  <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>

            <div class="sponsors__conference--text">
              <h2 class="sponsor-head">The Dufresne Group </h2>

              <a class="sponsor-url" href="https://dufresne.ca/" target="_blank">dufresne.ca</a>
            </div>
          </div>
          <!-- sponsors__conference--half-width -->
        </div>

        <!-- sponsors__conference--furtrader -->
        <h2 class="pages__subhead">Fur Trader</h2>
          <div class="sponsors__conference--furtrader">
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_wonderbrands');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Wonderbrands</h2>

                <a class="sponsor-url" href="https://wonderbrands.com/" target="_blank">wonderbrands.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsors_maple_leaf');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Maple Leaf Consumer Foods</h2>

                <a class="sponsor-url" href="https://www.mapleleaffoods.com/" target="_blank">mapleleaffoods.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_old_dutch');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Old Dutch Foods Limited</h2>

                <a class="sponsor-url" href="https://www.olddutchfoods.ca/" target="_blank">olddutchfoods.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_pg');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Procter & Gamble</h2>

                <a class="sponsor-url" href="https://pg.ca/en-ca/" target="_blank">pg.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_unilever');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Unilever Canada</h2>

                <a class="sponsor-url" href="https://www.unilever.ca/" target="_blank">unilever.ca</a>
              </div>
            </div>
          </div>

              

                

          

      </section>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  