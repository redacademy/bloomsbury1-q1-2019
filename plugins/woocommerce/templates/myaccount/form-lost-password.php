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
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>
		<input class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Enter Here" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" href="<?php echo get_permalink('239'); ?>" class="woocommerce-Button button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>
<?php
do_action( 'woocommerce_after_lost_password_form' );
