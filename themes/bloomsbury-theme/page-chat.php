<?php
/**
 * The main template file.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php if ( is_user_logged_in() ) { ?>

			<!-- <ul id="listMessages">
            </ul> -->

  <div id="listMessages">
  Your Messages:
  </div>


            <input type="text" name="message-input" />
            <button id="submit-message">
                Send
            </button>
			<br> 
            
// if get_avatar

<?php } else { ?>
	<p>You need to be <a href="<?php echo site_url(); ?>/wp-login.php">logged in</a> to use Bloomsbury's messaging</p>
<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
