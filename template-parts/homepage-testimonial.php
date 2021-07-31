<?php $homepageTestimonials = new WP_Query(array(
  'post_type' => 'testimonial'
)); ?>

<?php if ( $homepageTestimonials->have_posts() ) : ?>

<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>What they're saying about us</p>
    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <?php while ( $homepageTestimonials->have_posts() ) : $homepageTestimonials->the_post(); ?>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo get_the_content(); ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="testimonial-img" alt="">
            <h3><?php the_title(); ?></h3>
            <h4>
              <?php $designation_value = get_post_meta( get_the_ID(), '_meta_designation_value', true ); ?>
              <?php if ( ! empty ( $designation_value ) ) : echo $designation_value; ?>
              <?php endif; ?>
            </h4>
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