<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php the_title(); ?></h2>
          <ol>
            <li><a href="<?php echo get_post_type_archive_link('post'); ?>">Blog</a></li>
          </ol>
        </div>
        <p class="meta-data-author">By <?php the_author_posts_link(); ?> | <?php the_time('F j, Y'); ?></p>
      
      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p><?php the_content(); ?></p>
        <p class="meta-data-category">Posted in <?php echo get_the_category_list(', '); ?></p>
      </div>
    </section>

  </main><!-- End #main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>