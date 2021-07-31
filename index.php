<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php the_title(); ?></h2>
          <ol>
            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li><?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p><?php the_content(); ?></p>
      </div>
    </section>

  </main><!-- End #main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>