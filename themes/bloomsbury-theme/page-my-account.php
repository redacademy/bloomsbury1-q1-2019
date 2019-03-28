<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
                if ( is_user_logged_in()) { ?>

				<section class="dashboard-section">
					<!-- Start of Dashboard Cover Image -->
	<!-- 					<div class="edit-camera">
							<i class="fas fa-camera"> Edit</i>
						</div> -->
				</section>
				
					<!-- Start of Dashboard Container -->
				<div class="dashboard-container">
					<div class="dashboard-info">
						<a class="edit-account-info" href="<?php echo get_permalink('261');?>">		
							<i class="fas fa-pen"> Edit</i>
						</a>
						<h3 class="entry-title"><?php echo $current_user->display_name ?></h3>
						<p class="entry-meta"><?php echo $current_user->user_company ?></p>
					</div>
					<div class="icon-container">
						<div class="titles-images">
							<img class="dash-icon" src="<?php echo get_template_directory_uri() . '/images/bookmark.svg'?>" alt="hello">
							<p class="dash-text">My Files</p>
						</div>
						<div class="titles-images">
							<img class="dash-icon" src="<?php echo get_template_directory_uri() . '/images/message-icon.svg'?>" alt="hello">
							<p class="dash-text">Messages</p>
						</div>
						<div class="titles-images">
							<a href="<?php echo get_post_type_archive_link( 'events' ); ?>">
								<img class="dash-icon" src="<?php echo get_template_directory_uri() . '/images/event-icon.svg'?>" alt="hello">
								<p class="dash-text">Events</p>
							</a>
						</div>
					</div>
				</div>
				<!-- End of Dashboard profile container -->
				<!-- Floating Circle Avatar -->
				<div class="dashboard-avatar">
					<?php echo get_avatar( get_the_author_meta('user_email'), $size = 'full'); ?>
				</div>
				<!-- End of Avatar -->
			<section class="dashboard-main-body">
				<!-- Start of Lean Canvas --> 
				<div class="dashboard-lean-canvas">
					<!-- Start of Lean Circle -->
					<div class="lean-circle">

					</div>
					<!-- Start of Lean Graph -->
					<div class="lean-graph">
					</div>
				</div>
				<!-- End of Lean Canvas -->

				<!-- Start of Grid -->
				<div class="dashboard-grid">
					<div class="grid-item">
						<img class="grid-icon" src="<?php echo get_template_directory_uri() . '/images/paper-icon.svg'?>" alt="hello"> 
						<h5 class="grid-text">Resources</h5>
					</div>
					<div class="grid-item">
						<img class="grid-icon" src="<?php echo get_template_directory_uri() . '/images/puzzle-icon.svg'?>" alt="hello"> 
						<h5 class="grid-text">Lean Canvas</h5>
					</div>	
					<div class="grid-item">
						<img class="grid-icon" src="<?php echo get_template_directory_uri() . '/images/talk-icon.svg'?>" alt="hello"> 
						<h5 class="grid-text">Community</h5> 
					</div>	
					<div class="grid-item">
						<img class="grid-icon" src="<?php echo get_template_directory_uri() . '/images/calendar-icon.svg'?>" alt="hello"> 
						<h5 class="grid-text">Calendar</h5>
					</div>						
				</div>
			</section>
				<!-- End of Grid -->
			<?php } else { ?>
				<!-- Conditional Else if the user is not logged in, this will prevent them from seeing the static SCSS properties and styling that the page has -->
				<section class="dashboard-revert">
					<div class="revert-container">
						<h1>Sorry, You must be signed in to view this page</h1>
						<div class="redirect-containers">
							<p>Too register an account please visit</p>
							<a class="white-cap-btn" href="<?php echo get_permalink('243');?>">Register Account</a>
						</div>
						<div class="redirect-containers">
							<p>If you already have an account with us, please visit the </p>
							<a class="white-cap-btn" href="<?php echo get_permalink('239');?>">Login Page</a>
						</div>
						<p class="revert-e-desc">If you we're redirected too this page from Forgot Password, please follow the email link too reset</p>
					</div>
				</section>

			<?php } ?>
			</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->
