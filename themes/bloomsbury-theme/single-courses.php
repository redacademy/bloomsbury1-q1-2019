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
			<section class="single-hero">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</section><!-- .entry-header -->

			<div class="course-content">
				<?php the_title( '<h1 class="course-title">', '</h1>' ); ?>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
				<h2>Next avaliable course</h2>
				<p class="cfs"><?php echo CFS()->get('date');?></p> 

				<h2>Price</h2>
				<p class="cfs"><?php echo CFS()->get('price');?></p>
			</div><!-- .entry-content -->
		
		</article><!-- #post-## -->

			<!-- <?php the_post_navigation(); ?> -->

		<?php endwhile; // End of the loop. ?>
		<section class="course-request">
			<?php include('form/request-info.php') ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
