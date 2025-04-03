<?php get_header(); ?>

<div class="container">
  <h1 class="page-title"><?php single_cat_title() ?></h1>
  <div class="page-description">
    <p>Welcome to my blog! Here you will find my latest posts and updates.</p>
  </div>
  <div class="row">
    <div class="col-md-3">
      <?php if (is_active_sidebar('blog-sidebar')) : ?>
        <aside id="secondary" class="widget-area">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </aside>
      <?php endif; ?>
    </div>
    <div class="col-md-9">
      <?php get_template_part('includes/section', 'archive')?>
    </div>
  </div>
</div>

<?php get_footer(); ?>