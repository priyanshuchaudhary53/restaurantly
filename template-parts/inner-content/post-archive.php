<section class="why-us">
      <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row bottom-margin">
            <div class="col-lg-4 full-width">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h4 class="post-heading"><a class="white-color" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <span class="meta meta-data-author">By <?php the_author_posts_link(); ?> | <?php the_time('F j, Y'); ?></span>
                    <p><?php the_excerpt(); ?></p>
                    <span class="meta meta-data-category">Posted in <?php echo get_the_category_list(', '); ?></span>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php echo paginate_links(); ?>
        
      </div>
    
    </section>