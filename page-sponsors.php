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
        <h3 class="sponsor-links">All sponsor links open in a new window</h3>

        <!-- sponsors__conference--nor'westors -->
        <h2 class="pages__subhead">Nor'Westors</h2>
          <div class="sponsors__conference--norwester">

            <!-- sponsors__conference--half-width QUALITY FAST FOODS -->
            <div class="sponsors__conference--half-width">
              
              <?php 
                $image = get_field('sponsor_quality_fast_foods');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
              
              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Quality Fast Foods</h2>
                
                <a class="sponsor-url" href="https://qualityfastfoods.com/" target="_blank">qualityfastfoods.com</a >
              </div>
            </div>

            <!-- sponsors__conference--half-width ARCTIC BEVERAGES -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_arctic_ice');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">PepsiCo Foods (Frito Lay) & Arctic Beverages </h2>

                <a class="sponsor-url" href="https://arcticbev.com/" target="_blank">arcticbev.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width OLD DUTCH -->
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

            <!-- sponsors__conference--half-width DUFRESNE -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_dufresne');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">The Dufresne Group </h2>

                <a class="sponsor-url" href="https://thedufresnegroup.ca/" target="_blank">thedufresnegroup.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width COCA-COLA -->
            <div class="sponsors__conference--half-width">
            
              <?php 
                $image = get_field('sponsor_coca_cola_canada');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
              
              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Coca-Cola Canada Bottling Limited </h2>
                
                <a class="sponsor-url" href="https://www.coca-colacompany.com/" target="_blank">coca-colacompany.com</a >
              </div>
            </div>

            <!-- sponsors__conference--half-width CROSSMARK - P&G -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_p&g');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Procter & Gamble</h2>

                <a class="sponsor-url" href="https://pg.ca/en-ca/" target="_blank">pg.ca</a>
                <a class="sponsor-url" href="https://www.crossmark.com/" target="_blank">crossmark.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width KRAFT/HEINZ -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_kraft');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
              
              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Kraft Heinz</h2>

                <a class="sponsor-url" href="https://www.kraftheinzcompany.com/" target="_blank">kraftheinzcompany.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width NESTLE -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_nestle_canada');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
              
              <div class="sponsors__conference--text">
                <h2 class="sponsor-head"> Nestle Canda</h2>

                <a class="sponsor-url" href="https://www.nestle.com/" target="_blank">nestle.com</a>
              </div>
            </div>

          </div>

        <!-- sponsors__conference--furtrader -->
        <h2 class="pages__subhead">Fur Trader</h2>
          <div class="sponsors__conference--furtrader">

            <!-- sponsors__conference--half-width GMD Wholesale -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_gmd');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">GMD Wholesale</h2>

                <a class="sponsor-url" href="https://gmdwholesale.ca/" target="_blank">gmdwholesale.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width  Dream on me Kidway Company -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_dream_on');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Dream on me Kidway Company</h2>

                <a class="sponsor-url" href="https://dreamonme.com/" target="_blank">dreamonme.com</a><br>
                <a class="sponsor-url" href=" https://www.kidiway.com/" target="_blank">kidiway.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Harlan Fairbanks -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_harlan_fairbanks');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Harlan Fairbanks</h2>

                <a class="sponsor-url" href="https://harlans.ca/" target="_blank">harlans.ca</a>
              </div>
            </div>
            
            <!-- sponsors__conference--half-width HT Foods -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_ht_foods');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">HT Foods</h2>

                <a class="sponsor-url" href="http://htfoods.ca/" target="_blank">htfoods.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Unilever -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_unilever');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Unilever</h2>

                <a class="sponsor-url" href="https://www.unilever.ca/" target="_blank">unilever.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Conglom -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_conglom');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Conglom</h2>

                <a class="sponsor-url" href="https://www.conglom.com/" target="_blank">conglom.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Gentec International -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_gentec');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Gentec International</h2>

                <a class="sponsor-url" href="https://www.gentec-intl.com/" target="_blank">gentec-intl.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Complete Distribution Services -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_complete_dist');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Complete Distribution Services</h2>

                <a class="sponsor-url" href="https://compdist.ca/" target="_blank">compdist.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Bimbo Canada -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_bimbo_canada');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Bimbo Canada</h2>

                <a class="sponsor-url" href="https://bimbocanada.com/" target="_blank">bimbocanada.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Maple Leaf Foods -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_maple_leaf');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Maple Leaf Foods</h2>

                <a class="sponsor-url" href="https://www.mapleleaffoods.com/" target="_blank">mapleleaffoods.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Trend Marketing -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_trend');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Trend Marketing</h2>

                <a class="sponsor-url" href="https://trendm.com/" target="_blank">trendm.com</a>
              </div>
            </div>

          </div>

              
        <!-- sponsors__conference--meal sponsors -->
        <h2 class="pages__subhead">Meal Sponsors</h2>
          <div class="sponsors__conference--furtrader">

            <!-- sponsors__conference--half-width Bimbo Canada -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_bimbo_canada');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Bimbo Canada</h2>

                <a class="sponsor-url" href="https://bimbocanada.com/" target="_blank">bimbocanada.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width High Liner Foods -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_high_liner');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">High Liner Foods</h2>

                <a class="sponsor-url" href="https://www.highlinerfoods.com/" target="_blank">highlinerfoods.com</a>
              </div>
            </div>
            
            <!-- sponsors__conference--half-width Sysco -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_sysco');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Sysco</h2>

                <a class="sponsor-url" href="https://www.sysco.ca/" target="_blank">sysco.ca</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Tropicana Brands -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_tropicana');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Tropicana Brands</h2>

                <a class="sponsor-url" href="https://www.tropicanabrandsgroup.com/" target="_blank">tropicanabrandsgroup.com</a>
              </div>
            </div>

            <!-- sponsors__conference--half-width Metro -->
            <div class="sponsors__conference--half-width">
              <?php 
                $image = get_field('sponsor_metro');
                if( !empty( $image ) ): ?>
                    <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>

              <div class="sponsors__conference--text">
                <h2 class="sponsor-head">Metro</h2>

                <a class="sponsor-url" href="https://www.metro.ca/en" target="_blank">metro.ca/en</a>
              </div>
            </div>
          </div>
                

          

      </section>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  