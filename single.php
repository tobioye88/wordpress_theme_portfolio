<?php get_header(); ?>

<div class="container">
  <?php get_template_part('includes/section', 'blog-content')?>

  <?php comments_template(); ?>
</div>

<?php get_footer(); ?>