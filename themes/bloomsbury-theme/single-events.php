<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="event-date"><?php echo CFS()->get('date');?></p>
					<p class="event-location"><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get('location'); ?></p>
				</header><!-- .entry-header -->

				<div class="event-image">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
					<a class="btn">Attend →</a>

					<a class="event-home" href="<?php echo get_post_type_archive_link( 'events' ); ?>">Back To Events</a>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->



		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
