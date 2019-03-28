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

		<?php $image = get_field('page_banner_background_image'); 

		if( !empty($image)): ?>
			<img src="<?php echo $image['url']; ?>" />
			<?php endif; 
			?>

		<h1><?php the_field('page_banner_subtitle') ?></h1>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		
		</article><!-- #post-## -->

			<!-- <?php the_post_navigation(); ?> -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>