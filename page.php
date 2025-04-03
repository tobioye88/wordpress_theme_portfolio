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
      <?php get_template_part('includes/section', 'content') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>