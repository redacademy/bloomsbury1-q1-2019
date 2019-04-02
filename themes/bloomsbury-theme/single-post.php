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

		<section class="blog-hero">

			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

		</section>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="blog-meta">
					<?php bloomsbury_posted_on(); ?>
					<?php bloomsbury_posted_by(); ?>
				</div>
				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<p class="blog-comments"><i class="fas fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></p>
						<p class="blog-likes"><i class="fas fa-heart"></i> 0</p>
						<p class="blog-share"><i class="fas fa-share-alt"></i> Share </p>
											<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>

					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->


				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<section class="popular-posts">
				<div class="popular-header">
					<i class="far fa-thumbs-up"></i>
					<h2> Popular Posts</h2>
					</div>
					<?php $the_query = new WP_Query( array(
					    'meta_key' => 'post_views_count',
					    'orderby' => 'meta_value_num',
					    'posts_per_page' => 5,
					) ); 
					if ( $the_query->have_posts() ) {
						echo '<ul class="popular-post-grid">';
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo '<li class="grid-item">';
							echo '<div class="grid-picture">' . the_post_thumbnail() . '</div>';
							echo '<div class="grid-meta">';
							echo '<p class="entry-date">' . bloomsbury_posted_on() . '</p>';
							echo '<h2 class="entry-title">' . the_title() . '</h2>';
							echo '<p class="entry-author">' . bloomsbury_posted_by() . '</p>';
							echo '</div>';
							echo '</li>';
						}
						echo '</ul>';
					} else {
						// no posts found
					}
					wp_reset_postdata();
					?>

				<a class="back-blog" href="<?php echo get_permalink( get_page_by_path( 'blog' ) );?>">Back to Blog</a>
			</section>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
