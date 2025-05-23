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

      </section>
      <!-- ============================================== -->

      <!-- HORIZONTAL LINE
      =================================================== -->
      <section class="wrapper">
        <hr>
      </section>
      <!-- ============================================== -->

      <!-- VENDORS
      =================================================== -->
      <section class="wrapper sponsors">
        <div class="sponsors__banner">
          <h2>Wintering Partners Gathering (WPG) Trade Vendors</h2>
        </div>
       
        <div class="container__vendors wrapper text__container intro">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>

            <p>Sorry, no pages found</p>

            <?php endif; ?>


          <div class="vendors">

            <!-- ZONE 1 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone1',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone1">ZONE 1</h2>
              <div class="vendors__zones">
                

                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone1">
                    <p class="vendor__booth--blk"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--blk"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->
              
            </div> <!-- vendors__col -->

            <!-- ZONE 2 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone2',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone2">ZONE 2</h2>
              <div class="vendors__zones">
                

                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone2">
                    <p class="vendor__booth--blk"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--blk"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->
              
            </div> <!-- vendors__col -->

            <!-- ZONE 3 -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone3',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone3">ZONE 3</h2>
              <div class="vendors__zones">
                
                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone3">
                    <p class="vendor__booth--blk"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--blk"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

            <!-- ZONE 4 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone4',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone4">ZONE 4</h2>
              <div class="vendors__zones">
                
                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone4">
                    <p class="vendor__booth--wht"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--wht"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

            <!-- ZONE 5 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone5',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone5">ZONE 5</h2>
              <div class="vendors__zones">
                
                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone5">
                    <p class="vendor__booth--blk"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--blk"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

            <!-- ZONE 6 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone6',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone6">ZONE 6</h2>
              <div class="vendors__zones">
                
                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone6">
                    <p class="vendor__booth--blk"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--blk"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

            <!-- ZONE 7 / -->
            <div class="vendors__col">

              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'zone7',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
                  'order'           =>  'ASC',
                  'orderby'         =>  'title',
                ));
              ?>
              <h2 class="vendor__header vendor__header--zone7">ZONE 7</h2>
              <div class="vendors__zones">
                
                <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                  <div class="vendor vendor__zone7">
                    <p class="vendor__booth--wht"><strong>Booth: </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                    <h4 class="vendor__name--wht"><?php the_field( 'vendor_name' ); ?></h4>
                  </div> <!-- vendor vendor__zone1 -->

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
              </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

            <!-- ZONE 8 / -->
            <div class="vendors__col">

                <?php    
                  $conferenceVendors = new WP_Query ( array(       
                    'post_type'       => 'zone8',
                    'posts_per_page'  =>  -1,
                    'paged'           =>  $paged,
                  ));
                ?>
                <h2 class="vendor__header vendor__header--zone8">Private Label</h2>
                <div class="vendors__zones">
                  
                  <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>


                    <div class="vendor vendor__zone8">
                      <p class="vendor__booth--wht"><?php the_field( 'vendor_booth_number' ); ?></p>
                      <h4 class="vendor__name--wht"><?php the_field( 'vendor_name' ); ?></h4>
                      <?php 
                        $image = get_field('vendor_brand');
                        if( !empty( $image ) ): ?>
                            <img class="vendor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                      <?php endif; ?>

                    </div> <!-- vendor vendor__zone1 -->

                  <?php endwhile; ?>

                  <?php wp_reset_postdata(); ?>
                </div> <!-- vendors__zones -->

            </div> <!-- vendors__col -->

          </div> <!-- vendors -->
        </div> <!-- container__vendors -->

          

      </section>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  