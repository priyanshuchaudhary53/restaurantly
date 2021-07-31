<section id="hero" class="d-flex align-items-center" <?php if( get_theme_mod('rest_hero_bg_image') ) : ?> style="background-image: url('<?php echo get_theme_mod('rest_hero_bg_image'); ?>');" <?php endif; ?> >
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span><?php echo get_bloginfo('name'); ?></span></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>

        <div class="btns">
          <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
        </div>
      </div>
      
      <?php if ( get_option('rest_hero_video_checkbox', true) ) : ?>

      <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
        <a href="<?php echo get_option('rest_hero_video', 'https://youtu.be/GlrxcuEDyF8'); ?>" class="glightbox play-btn"></a>
      </div>

      <?php endif; ?>

    </div>
  </div>
</section>