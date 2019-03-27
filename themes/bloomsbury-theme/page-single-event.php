<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<div class="header-container">
					<div class="title-location">
						<h1 class="event-title"><?php the_title(); ?></h1>
						<p class="event-location"><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get( 'location' ); ?></p>
					</div>
					<p class="event-date"><?php echo CFS()->get( 'date' ); ?></p>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
						<a class="blue-square-btn">Attend <i class="fas fa-arrow-right"></i></a>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->


					<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
