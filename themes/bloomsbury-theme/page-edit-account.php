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

					<section class="mini-hero">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>

						</div><!-- .entry-content -->
					</section>

					<section class="edit-form-container">

						<h2 class="edit-header">Account Details</h2>
						<div class="edit-info-form" id="test">
							<?php $plugin_dir = ABSPATH . 'wp-content/plugins/woocommerce/templates/myaccount/form-edit-account.php'; ?>
							<?php require($plugin_dir); ?>
						</div>
					</section>

				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
