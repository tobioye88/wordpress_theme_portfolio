<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="content mb-3">
            <h3><?php the_title(); ?></h3>
            <div class="entry">
                <?php the_excerpt(); ?>
            </div>
            <div class="read-more">
                <a href="<?php the_permalink(); ?>" class="btn btn-link">Read More</a>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- <?php previous_posts_link()?>
    <?php next_posts_link()?> -->
    <div class="pagination">
        <?php
        // Pagination
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('« Previous', 'textdomain'),
            'next_text' => __('Next »', 'textdomain'),
        ));
        ?>
    </div>
<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>