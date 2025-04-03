<?php 
/*
Template Name: Contact Us
*/
get_header('secondary');
?>

<div class="container">
  <h1>Contact Us</h1>
  <div class="row">
    <div class="col-md-6">
      <div class="py-3">
        <h2>Get in Touch</h2>
        <p>If you have any questions, feel free to reach out!</p>
      </div>
      <div class="py-3">
        <h2>Our Location</h2>
        <p>123 Portfolio St, Creative City, CA 12345</p>
      </div>
    </div>
    <div class="col-md-6">
      <form action="" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Send email or save to database
    // wp_mail($to, $subject, $message);

}
get_footer();
?>