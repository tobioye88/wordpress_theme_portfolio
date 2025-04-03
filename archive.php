<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <?php if (is_active_sidebar('page-sidebar')) : ?>
        <aside id="secondary" class="widget-area">
          <?php dynamic_sidebar('page-sidebar'); ?>
        </aside>
      <?php endif; ?>
    </div>
    <div class="col-md-9">
      <h1 class="page-title"><?php single_cat_title() ?></h1>
      <?php get_template_part('includes/section', 'archive') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>