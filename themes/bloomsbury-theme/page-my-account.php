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
				<section class="dashboard-section">
					<!-- Start of Dashboard Cover Image -->
						<div class="edit-camera">
							<h2>HELLO</h2>
						</div>
				</section>

					<!-- Start of Dashboard Container -->
				<div class="dashboard-container">
					<div class="dashboard-info">
						<h6 class="edit-pen">
							<i class="fas fa-pen"></i> Edit </h6>
						<h3 class="entry-title"><?php echo $current_user->display_name ?></h3>
						<p class="entry-meta"><?php echo $current_user->user_company ?></p>
						<p class="entry-desc"><?php echo $current_user->description ?></p>
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
							<img class="dash-icon" src="<?php echo get_template_directory_uri() . '/images/event-icon.svg'?>" alt="hello">
							<p class="dash-text">Events</p>
						</div>
					</div>
				</div>
				<!-- End of Dashboard profile container -->
				<!-- Floating Circle Avatar -->
				<div class="dashboard-avatar">
					<?php echo get_avatar( get_the_author_meta('user_email'), $size = 'full'); ?>
				</div>
				<!-- End of Avatar -->

				<?php the_content() ?>

				<!-- Start of Lean Canvas --> 
				<div class="dashboard-lean-canvas">
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
				<!-- End of Grid -->
			</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
