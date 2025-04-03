<?php get_header(); ?>

<div class="container">
  <div>
    <?php get_search_form(); ?>
  </div>
  <?php get_template_part('includes/section', 'content')?>
</div>

<?php get_footer(); ?>