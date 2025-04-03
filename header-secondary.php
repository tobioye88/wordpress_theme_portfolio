<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <div class="header d-flex justify-content-between align-items-center py-3">
      <h1 class="d-inline-block">Portfolio - S</h1>
      <nav class="d-inline-block">
        <ul class="nav d-flex justify-content-center gap-3">
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>