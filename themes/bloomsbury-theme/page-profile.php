<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<section id="background">
				
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
			

			
				<div id="buttons">
					<button class="view-lean-canvas-button"><i class="fas fa-puzzle-piece"></i>View Lean Canvas</button>
					<button class="message-button"><i class="far fa-envelope"></i>Message</button>
				</div>
			

				

				<section class="contact-info">
					<div class="info">
						<h2>Contact</h2>
						<div class="contact">

						<i id="fas fa-envelope" class="envelope"></i>
							<p>nazhussein7@gmail.com</p>
						
						
						<i id="fas fa-phone"></i>
							<p>+44750 798 9847</p>
						
						
						<i id="fas fa-globe"></i>
							<p>nazhussein.com</p>
</div>
				
						
				
					<div class="social-logos">
						<i class="fab fa-twitter"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-linkedin"></i>
						<i class="fab fa-facebook-square"></i>
					</div>
					</div>
					</section>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
