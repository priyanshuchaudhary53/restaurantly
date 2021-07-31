<?php get_header(); ?>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>
              <?php the_archive_title(); ?>
          </h2>
        </div>

      </div>
    </section>

    <?php get_template_part('template-parts/inner-content/post', 'archive'); ?>

  </main><!-- End #main -->

<?php get_footer(); ?>