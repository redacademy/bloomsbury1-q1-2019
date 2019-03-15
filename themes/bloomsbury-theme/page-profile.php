<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<section id="profile-page">
					<section class="profile-page-content">
					<div class="profile-image-field">
					<img class="profile-image" src="<?php echo get_template_directory_uri(); ?>/images/face.png">

					</div>
					<div class="profile-info">
						<p>Naz Hussein</p>
						<p>Founder, Meal Planners Inc.</p><br>
						<p> <i class="fas fa-map-marker-alt"> </i> London, UK</p>
						<p><em>"I'm working on identifying my value proposition and particular user to be better position my organic meal prep business in the market."</em></p>


					</div>
				</section>

				<section id="buttons">
					<button class="view-lean-canvas-button">View Lean Canvas</button>
					<button class="message-button">Message</button>
				</section>


				<section class="contact-info">
					<h2>Contact</h2>
					<div class="email">
						<p>nazhussein7@gmail.com</p>
					</div><hr>
					<div class="phone-number">
						<p>+44750 798 9847</p>
					</div><hr>
					<div class="website">
						<p>nazhussein.com</p>
					</div>
				</section>
				<section class="social-logos">
					<div><i class="fab fa-twitter"></i></div>
					<div><i class="fab fa-instagram"></i></div>
					<div><i class="fab fa-linkedin"></i></div>
					<div><i class="fab fa-facebook-square"></i></div>
				</section>

				</section> <!--profile-page -->







			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
