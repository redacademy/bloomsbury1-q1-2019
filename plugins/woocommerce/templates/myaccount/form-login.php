<?php get_header(); ?>
<!-- Start of Hero Area --> 
<div class="hero-grad">
  <!-- Start of Hero Title Text -->
  <div class="hero-text">
    <h1>Member's Area</h1>
    <p>Are you a student in a bloomsbury beginning course?
      Take advantage of online support to reach your goals in our Members Area</p> 
  </div> 
  <!-- End of Hero Title Text --> 
  <!-- Start of Icon Area -->
  <div class="icon-area">
    <!-- Start of Icon Container 1-->
    <div class="icon-container">
      <img src="<?php echo get_template_directory_uri() . '/images/edit-icon.png'?>">
      <p>Create, edit and share your lean canvas</p>
    </div>
    <!-- End of Icon Container 1 -->
    <!-- Start of Icon Container 2-->
    <div class="icon-container">
      <img src="<?php echo get_template_directory_uri() . '/images/track-progress.png'?>">
      <p>Track your progress</p>
    </div>
    <!-- End of Icon Container 2 -->
    <!-- Start of Icon Container 3-->
    <div class="icon-container">
      <img src="<?php echo get_template_directory_uri() . '/images/network-icon.png'?>">
      <p>Connect with other members on the forum</p>
    </div>
     <!-- End of Icon Container 3-->
  </div>
  <!-- End of Icon Area -->
</div>
<!-- End of Hero Area -->




<?php
if( isset($_GET['action']) == 'register' ) {
    wc_get_template( 'myaccount/form-register.php' );
} else {
    wc_get_template( 'myaccount/form-login-single.php' );
 } ?> 
