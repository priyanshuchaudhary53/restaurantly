<?php $homepageEvents = new WP_Query( array(
  'post_type' => 'event'
) ); ?>

<?php if ( $homepageEvents->have_posts() ) : ?>

<section id="events" class="events" <?php if( get_theme_mod('rest_event_bg_image') ) : ?> style="background-image: url('<?php echo get_theme_mod('rest_event_bg_image'); ?>');" <?php endif; ?> >
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Events</h2>
      <p>Organize Your Events in our Restaurant</p>
    </div>

    <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <?php while ( $homepageEvents->have_posts() ) : $homepageEvents->the_post(); ?>

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3><?php the_title(); ?></h3>
              <div class="price">
                <p><span>
                <?php $price_value = get_post_meta( get_the_ID(), '_meta_price_value', true ); ?>
                <?php if ( ! empty ( $price_value ) ) : echo $price_value; ?>
                <?php endif; ?>
                </span></p>
              </div>
              <?php the_content(); ?>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <?php endwhile; ?>

      </div>
      
      <div class="swiper-pagination"></div>

    </div>

  </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>