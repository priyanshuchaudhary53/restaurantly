<?php $homepageSpecials = new WP_Query(array(
  'post_type' => 'special'
)); ?>

<?php if ( $homepageSpecials->have_posts() ) : ?>

<section id="specials" class="specials">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Specials</h2>
      <p>Check Our Specials</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column special">

          <?php while ( $homepageSpecials->have_posts() ) : $homepageSpecials->the_post(); ?>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-<?php the_ID(); ?>">
                <?php $price_value = get_post_meta( get_the_ID(), '_meta_dish_name_value', true ); ?>
                <?php if ( ! empty ( $price_value ) ) : echo $price_value; ?>
                <?php endif; ?>
              </a>
            </li>

          <?php endwhile; ?> 

        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content special-content">
          
          <?php while ( $homepageSpecials->have_posts() ) : $homepageSpecials->the_post(); ?>

            <div class="tab-pane" id="tab-<?php the_ID(); ?>">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <?php endwhile; ?>

        </div>
      </div>
    </div>

  </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>