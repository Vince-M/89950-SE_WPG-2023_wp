<!-- FOOTER
  =================================================== -->
  <footer class="footer">
    <div class="wrapper row">
      <div class="footer__nav">
        <div class="footer__logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_theme_file_uri() ?>/img/wpg_footer-logo_175x75.svg" alt="WPG_logo">
          </a>
        </div>

        <div class="footer__menu">
          <div class="footer__nav--item footer__nav--conference">
            <h4 class="footer__menu--head">Programs</h4>
              <?php
                wp_nav_menu( array(
                  'theme_location'  =>  'wpg-footer-programs',
                  'depth'           =>  3,
                  'container'       =>  false
                ))
              ?>

          </div>

          <div class="footer__nav--item footer__nav--visit">
            <h4 class="footer__menu--head">Plan your Visit</h4>
              <?php
                wp_nav_menu( array(
                  'theme_location'  =>  'wpg-footer-visit',
                  'depth'           =>  2,
                  'container'       =>  false
                ))
              ?>
          </div>

          <div class="footer__nav--item footer__nav--tradeshow">
            <h4 class="footer__menu--head">Trade Show</h4>
              <?php
                wp_nav_menu( array(
                  'theme_location'  =>  'wpg-footer-tradeshow',
                  'depth'           =>  4,
                  'container'       =>  false
                ))
              ?>
          </div>

            <!-- contact button -->
            <div class="btn btn__contact btn__contact--footer nav__link">
              <a class="btn btn__contact nav__link" href="<?php echo site_url( '/contact' ); ?>">Contact</a>
            </div>
            <!-- contact button end -->
        </div>
        <!-- footer__menu -->
      </div>
      <!-- footer__nav -->
      <div class="footer__media">
        <div class="footer__media--copy">
          <p>Copyright &copy; <?php echo date( 'Y' ); ?> NWC Wintering Partners Gathering. All rights reserved.</p>
        </div>
        <div class="footer__media--links">
          <a href="https://www.northwest.ca/legal-privacy" target="_blank">Legal / Privacy</a>
          <a href="https://www.northwest.ca/terms-and-conditions" target="_blank">Terms & Conditions</a>
          <a href="https://www.northwest.ca/contact-us" target="_blank">Contact</a>
        </div>
      </div>
    </div>
    <!-- container row -->
  </footer>
  <!-- ============================================== -->


    <?php wp_footer(); ?>
  </body>
</html>