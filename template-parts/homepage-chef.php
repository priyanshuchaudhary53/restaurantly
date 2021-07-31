<?php $homepageChefs = new WP_Query(array(
  'post_type' => 'chef'
)); ?>

<?php if ( $homepageChefs->have_posts() ) : ?>

<section id="chefs" class="chefs">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Chefs</h2>
      <p>Our Proffesional Chefs</p>
    </div>

    <div class="row">

      <?php while( $homepageChefs->have_posts() ) : $homepageChefs->the_post(); ?>
      
      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="300">
          <img src="<?php the_post_thumbnail_url('chef-thumbnail'); ?>" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4><?php the_title(); ?></h4>
              <span>
                <?php $designation_value = get_post_meta( get_the_ID(), '_meta_designation_value', true ); ?>
                <?php if ( ! empty ( $designation_value ) ) : echo $designation_value; ?>
                <?php endif; ?>
              </span>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; ?>

    </div>

  </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>