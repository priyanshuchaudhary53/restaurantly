<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?php echo get_bloginfo('name'); ?></h3>
              <p>
                <?php echo get_option('rest_restaurant_location', 'A108 Adam Street, New York, NY 535022'); ?>
                <br><br>
                <?php if ( get_option('rest_restaurant_phone', '+1 5589 55488 55s') ) : ?>
                  <strong>Phone:</strong> <?php echo get_option('rest_restaurant_phone', '+1 5589 55488 55s'); ?><br>
                <?php endif; ?>
                <?php if ( get_option('rest_restaurant_email', 'info@example.com') ) : ?>
                  <strong>Email:</strong> <?php echo get_option('rest_restaurant_email', 'info@example.com'); ?><br>
                <?php endif; ?>
              </p>
              <div class="social-links mt-3">
                
                <?php if (get_option('rest_socials_twitter', '#')) : ?>
                  <a href="<?php echo get_option('rest_socials_twitter', '#'); ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <?php endif; ?>

                <?php if (get_option('rest_socials_facebook', '#')) : ?>
                  <a href="<?php echo get_option('rest_socials_facebook', '#'); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <?php endif; ?>

                <?php if (get_option('rest_socials_instagram', '#')) : ?>
                  <a href="<?php echo get_option('rest_socials_instagram', '#'); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <?php endif; ?>

                <?php if (get_option('rest_socials_skype', '#')) : ?>
                  <a href="<?php echo get_option('rest_socials_skype', '#'); ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
                <?php endif; ?>

                <?php if (get_option('rest_socials_linkedin', '#')) : ?>
                  <a href="<?php echo get_option('rest_socials_linkedin', '#'); ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <?php endif; ?>

              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>
              <?php if (has_nav_menu('footer_menu_1')) : echo wp_get_nav_menu_name('footer_menu_1'); else : ?>
              Useful Links
              <?php endif; ?>
            </h4>
            
            <?php if ( has_nav_menu('footer_menu_1') ) : ?>

              <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_1',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'fallback_cb' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Footer_Menu_Walker()
              )); ?>

            <?php else : ?>

              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>

            <?php endif; ?>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>
              <?php if (has_nav_menu('footer_menu_2')) echo wp_get_nav_menu_name('footer_menu_2'); ?>
            </h4>

            <?php if ( has_nav_menu('footer_menu_2') ) : ?>

              <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_2',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'fallback_cb' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Footer_Menu_Walker()
              )); ?>

            <?php endif; ?>

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo get_bloginfo('name'); ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Template designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> 
      </div>
      <div class="credits">Theme developed by <a href="https://github.com/priyanshuchaudhary53/">Priyanshu Chaudhary</a></div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php wp_footer(); ?>

</body>

</html>