<?php get_header(); ?>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="javascript: void(0)" class="search-open-btn"><i class="bi bi-search"></i> Search</a></li>
          </ol>
        </div>

      </div>
    </section>

    <?php get_template_part('template-parts/inner-content/post', 'archive'); ?>

  </main><!-- End #main -->

<?php get_footer(); ?>