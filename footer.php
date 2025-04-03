<footer>
<div class="container">
    <div class="footer d-flex justify-content-between align-items-center py-3">
      <p>&copy; <?php echo date('Y'); ?> Portfolio. All rights reserved.</p>
      <nav>
        <?php wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'footer-menu'])?>
      </nav>
    </div>
    <div class="social-media d-flex justify-content-center gap-3">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>