<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!-- Start of Code -->
		<section class="members-area-header">
		<!-- add your header here -->
		</section>
		<section class="mb-header">
		<img class="saved-mb" src="<?php echo get_template_directory_uri() . '/images/saved-mb.svg'?>" alt="hello">
		<p class="header-tag">store and search your <br> saved resources</p>
		<div class="saved-items">Saved Items         Filter: All</div>
		</section>
		<section class="mb-body">
			<!-- add post date php here -->
			<a class="blue-cap-btn">today <!--add date php here--> </a>
			<div class="dashboard-canvas"><h2 class="board-temp">Vision Board</h2> <br>
			<p class="board-temp">Visualise what your wnat to be, have, and do it in the future</div>
			</p>
			<img class="saved-mb" src="<?php echo get_template_directory_uri() . '/images/saved-mb.svg'?>" alt="hello">		</section>

		<img class="phill-murray" src="<?php echo get_template_directory_uri() . '/images/140x100.svg'?>" alt="hello">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
