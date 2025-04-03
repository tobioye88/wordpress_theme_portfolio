<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="content">
            <h2><?php the_title(); ?> - Blog content</h2>
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <div class="entry">
                <p><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') ?></
                <p><?php the_date(); ?></p>
                <p><?php the_time(); ?></p>
                <p><?php the_category(); ?></p>
                <p><?php the_tags(); ?></p>
                <p><?php the_permalink(); ?></p>
                <p><?php the_post_thumbnail(); ?></p>
                <p><?php the_post_thumbnail_url(); ?></p>
                <p><?php the_post_thumbnail('thumbnail'); ?></p>
            </div> 
        </div>
    <?php endwhile;
else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>