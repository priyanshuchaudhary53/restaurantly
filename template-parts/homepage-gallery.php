<?php $homepageGallery = new WP_Query(array(
  'post_type' => 'gallery'
)); ?>

<?php if ( $homepageGallery->have_posts() ) : ?>

<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Gallery</h2>
      <p>Some photos from Our Restaurant</p>
    </div>
  </div>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <?php while ( $homepageGallery->have_posts() ) : $homepageGallery->the_post(); ?>

        <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="<?php the_post_thumbnail_url(); ?>" class="gallery-lightbox" data-gall="gallery-item">
            <img src="<?php the_post_thumbnail_url('gallery-image'); ?>" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <?php endwhile; ?>

    </div>

  </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>