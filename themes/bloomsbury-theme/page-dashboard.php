<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Start of Dashboard Section -->
			<section class="dashboard-section">
			<!-- Start of Dashboard Cover Image -->
				<div class="dashboard-cover">
					<div class="edit-camera">
						<!-- THE DESIGN PROVIDED BY UI IS MISSING AN IMAGE THAT THEY HAVE NOT ADDED PROPERLY AND SO THE IMAGE WAS ADDED AS IS! -->
						<img class="edit-camera" src="<?php echo get_template_directory_uri() . '/images/edit-camera.svg'?>" alt="hello">
						<!----------------------------------------------------------------------------------------------------------------------->
					</div>
				</div>
			<!-- End of Cover -->
			<!-- Start of Dashboard Container -->
				<div class="dashboard-div">
				<div class="edit-pen">
				<H6 class="edit-pen"><i class="fas fa-pen"></i> Edit </H6>
				</div>
				</div>
			<!-- End of Container -->
			<!-- Start of Profile Circle -->
				<div class="dashboard-circle">
				</div>
			<!-- End of Profile Circle -->
			<!-- strat of your name -->
			<div class="your-name">
				<!-- add account details php here -->
				<p class="your-name"> Your Name  </p>	
				<p class="yourname"> Ocupation</p>
			</div>
			<!-- End of your name -->
			<!-- start of title icons -->
			<div class="titles-images">
				<img class="social-icon" src="<?php echo get_template_directory_uri() . '/images/bookmark.svg'?>" alt="hello">
				<img class="social-icon" src="<?php echo get_template_directory_uri() . '/images/message-icon.svg'?>" alt="hello">
				<img class="social-icon" src="<?php echo get_template_directory_uri() . '/images/event-icon.svg'?>" alt="hello">
			</div>
			<!-- end of title icons -->
			<!-- Start of Titles -->
				<div class="dashboard-titles">
					<h5 class="social">My Files</h5>
					<h5 class="social">Messages</h5>
					<h5 class="social">Events</h5>
				</div>
			<!-- End of Titles --> 
			<!-- start of canvas -->
				<div class="dashboard-canvas">
				</div>
			<!-- end of canvas -->
			</section>
			<!-- End of Dashboard Section -->
			<!-- start of dashboard bottom "section" -->
			<section class="dashboard-bottom">
			<!-- Resources, Lean Canvas, Community and Calendar Start Here -->
			<!-- start of Resources + Lean Canvas -->
				<div class="dashboard-resources">
					<img class="resources-icon" src="<?php echo get_template_directory_uri() . '/images/paper-icon.svg'?>" alt="hello"> <h5 class="flex-social">Resources</h5>
				</div>
				<div class="dashboard-lean-canvas">
					<img class="resources-icon" src="<?php echo get_template_directory_uri() . '/images/puzzle-icon.svg'?>" alt="hello"> <h5 class="flex-social">Lean Canvas</h5>
				</div>
			</section>
			<!-- End -->
			<!-- start of Community + Calendar -->
			<section class="dashboard-bottom-2">
				<div class="dashboard-community">
				<img class="resources-icon" src="<?php echo get_template_directory_uri() . '/images/talk-icon.svg'?>" alt="hello"> <h5 class="flex-social">Community</h5> 
				</div>
				<div class="dashboard-calendar">
				<img class="resources-icon" src="<?php echo get_template_directory_uri() . '/images/calendar-icon.svg'?>" alt="hello"> <h5 class="flex-social">Calendar</h5>
				</div>
			</section>
			<!-- End -->
			<!-- *** End of Page *** -->

			<a class="white-btn">TESTING TESTING TESTING</a>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>