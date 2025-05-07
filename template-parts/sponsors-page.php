

<div class="container container__sponsors row">
          <div class="sponsors__conference">
            <h2 class="pages__subhead">Nor'Westors</h2>
            <div class="sponsors__conference--norwester">
              <div class="sponsors__conference--half-width">
              
                <?php 
                  $image = get_field('sponsor_coca_cola_canada');
                  if( !empty( $image ) ): ?>
                      <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>
                
                <div class="sponsors__conference--text">
                  <h2 class="sponsor-head">
                  <?php the_field('coca_cola_sponsor_heading'); ?>
                  </h2>
                  
                  <a
                    class="sponsor-url"
                    href="https://cokecanada.com/"
                    target="_blank"
                    >cokecanada.com</a >
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
                  <h2 class="sponsor-head">
                    <?php the_field('nestle_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://www.corporate.nestle.ca/en"
                    target="_blank"
                    >corporate.nestle.ca/en</a
                  >
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
                  <h2 class="sponsor-head">
                    <?php the_field('pepsico_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://www.pepsico.ca/"
                    target="_blank"
                    >pepsico.ca</a>
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
                  <h2 class="sponsor-head">
                    <?php the_field('hq_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://hqfinefoods.com/"
                    target="_blank"
                    >hqfinefoods.com</a
                  >
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
                  <h2 class="sponsor-head">
                    <?php the_field('dufresne_heading'); ?>
                  </h2>

                  <?php 
                  $link = get_field('dufresne_link');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_blank';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>

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
                  <h2 class="sponsor-head">
                    <?php the_field('wonderbrands_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://wonderbrands.com/"
                    target="_blank"
                    >wonderbrands.com</a
                  >
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
                  <h2 class="sponsor-head">
                    <?php the_field('maple_leaf_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://www.mapleleaffoods.com/"
                    target="_blank"
                    >mapleleaffoods.com</a
                  >
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
                  <h2 class="sponsor-head">
                    <?php the_field('old_dutch_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://www.olddutchfoods.ca/"
                    target="_blank"
                    >olddutchfoods.ca</a
                  >
                </div>
              </div>

             
            </div>
            <!-- sponsors__conference--furtrader -->

            <h2 class="pages__subhead">Meal Sponsors</h2>
            <div class="sponsors__conference--furtrader">
              <div class="sponsors__conference--half-width">
                <?php 
                  $image = get_field('sponsor_wonderbrands');
                  if( !empty( $image ) ): ?>
                      <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>

                <div class="sponsors__conference--text">
                  <h2 class="sponsor-head">
                    <?php the_field('wonderbrands_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://wonderbrands.com/"
                    target="_blank"
                    >wonderbrands.com</a
                  >
                </div>
              </div>
              <!-- sponsors__conference--half-width -->
              <div class="sponsors__conference--half-width">
                <?php 
                  $image = get_field('sponsor_metro');
                  if( !empty( $image ) ): ?>
                      <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>

                <div class="sponsors__conference--text">
                  <h2 class="sponsor-head">
                    <?php the_field('metro_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://corpo.metro.ca/en/home.html"
                    target="_blank"
                    >metro.ca</a
                  >
                </div>
              </div>
              <!-- sponsors__conference--half-width -->
              <div class="sponsors__conference--half-width">
                <?php 
                  $image = get_field('sponsor_lactalis');
                  if( !empty( $image ) ): ?>
                      <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>

                <div class="sponsors__conference--text">
                  <h2 class="sponsor-head">
                    <?php the_field('lactalis_heading'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="http://parmalat.ca/"
                    target="_blank"
                    >parmalat.ca</a
                  >
                </div>
              </div>
              <!-- sponsors__conference--half-width -->
              <div class="sponsors__conference--half-width">
              <?php 
                  $image = get_field('sponsor_sysco');
                  if( !empty( $image ) ): ?>
                      <img class="sponsor-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>

                <div class="sponsors__conference--text">
                <h2 class="sponsor-head">
                    <?php the_field(' sponsor_sysco'); ?>
                  </h2>

                  <a
                    class="sponsor-url"
                    href="https://www.sysco.ca/location/winnipeg/"
                    target="_blank"
                    >sysco.ca</a
                  >
                </div>
              </div>
              <!-- sponsors__conference--half-width -->
            </div>
          </div>
          <!-- sponsors__conference -->
        </div>