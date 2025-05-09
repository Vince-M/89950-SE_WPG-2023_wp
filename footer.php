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
          <a href="https://www.northwest.ca/contact-us" target="_blank">Contact NWC</a>
        </div>
      </div>
    </div>
    <!-- container row -->
  </footer>
  <!-- ============================================== -->


    <?php wp_footer(); ?>
  </body>
</html>