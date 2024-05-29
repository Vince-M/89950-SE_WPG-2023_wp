<?php get_header(); ?>

  <!-- MAIN
  =================================================== -->
  <main id="main">
    <article>
      <!-- HERO
      =================================================== -->
      <section class="hero feature" aria-labelledby="hero_section">

        <div class="hero__concert" style="background: url(<?php the_field( 'concert_hero' ); ?>) no-repeat; background-position: top; background-size: cover; top: 30px;">

          <div class="hero__concert--head">
            <img class="hero__concert--logo" src="<?php echo get_theme_file_uri() ?>/img/concert-series-logo_430x157.svg" width="430" alt="NWC Concert Series">

            <div class="concert__name">
              <?php 
                $image = get_field('concert_name');
                if( !empty( $image ) ): ?>
                    <img  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" width="571" >
              <?php endif; ?>
            </div>

            <div class="hero__concert--support">
              <?php 
                $image = get_field('concert_support');
                if( !empty( $image ) ): ?>
                    <img  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" width="200" >
              <?php endif; ?>
            </div>

          </div>

        </div> <!-- hero__index -->

    </section> <!-- hero feature -->
      <!-- ============================================== -->

      <!-- BREADCRUMBS
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


      <!-- BAND BIO
      =================================================== -->
      <section class="wrapper">
   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <p>Sorry, no pages found</p>

        <?php endif; ?>

      </section>
      <!-- ============================================== -->
    </article>
  </main>
  <!-- ============================================== -->

  <?php get_footer(); ?>

  