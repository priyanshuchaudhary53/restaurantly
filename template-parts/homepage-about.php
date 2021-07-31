<section id="about" class="about" <?php if( get_theme_mod('rest_about_bg_image') ) : ?> style="background-image: url('<?php echo get_theme_mod('rest_about_bg_image'); ?>');" <?php endif; ?> >
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
          <?php $about_img = get_theme_file_uri('assets/img/about.jpg'); ?>
          <?php if ( get_theme_mod('rest_about_image') != '') { $about_img = get_theme_mod('rest_about_image'); }  ?>
          <img src="<?php echo $about_img; ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3><?php echo get_option('rest_about_heading', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.'); ?></h3>
        <?php if ( get_option( 'rest_about_content' ) ) : ?>

          <p><?php echo get_post(get_option('rest_about_content'))->post_content; ?></p>

        <?php else : ?>

          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>

       <?php endif; ?>

      </div>
    </div>

  </div>
</section>