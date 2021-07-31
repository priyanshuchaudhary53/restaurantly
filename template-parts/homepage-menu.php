<?php $homepageMenu = new WP_Query(array(
  'post_type' => 'menu-item'
)); ?>

<?php if ( $homepageMenu->have_posts() ) : ?>

<section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Menu</h2>
      <p>Check Our Tasty Menu</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">All</li>

          <?php $cat_taxonomies = get_terms( array(
            'taxonomy' => 'categories',
            'hide_empty' => false
          ) ); ?>

          <?php if ( !empty($cat_taxonomies) ) : ?>
          <?php foreach ( $cat_taxonomies as $cat ) : ?>
            <li data-filter=".filter-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
          <?php endforeach; ?>
          <?php endif; ?>

        </ul>
      </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

      <?php while( $homepageMenu->have_posts() ) : $homepageMenu->the_post(); ?>

      <div class="col-lg-6 menu-item filter-<?php foreach ( (get_the_terms( get_the_ID(), 'categories' )) as $menu_cat ) { echo $menu_cat->slug; } ?>">
          <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#"><?php the_title(); ?></a>
            <span>
            <?php $price_value = get_post_meta( get_the_ID(), '_meta_price_value', true ); ?>
              <?php if ( ! empty ( $price_value ) ) : echo $price_value; ?>
            <?php endif; ?>
            </span>
          </div>
          <div class="menu-ingredients">
            <?php the_content(); ?>
          </div>
        </div>

      <?php endwhile; ?>

    </div>

  </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>