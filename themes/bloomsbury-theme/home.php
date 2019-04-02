<?php
/**
 * The main template file.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section class="blog-home-hero">
				<h1 class="blog-title">Blog</h1>
			</section>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php
               			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'small' );
               				echo '<div class="entry-image" style="background: url('. $url .'); background-size: cover; background-position: center" >'; ?>
               			</div>
               			<?php endif; ?>
						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php bloomsbury_posted_on(); ?> 
							<?php bloomsbury_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>

						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->

					<div class="comment-meta">
						<p class="blog-comments"><i class="fas fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></p>
						<p class="blog-likes"><i class="fas fa-heart"></i> 0</p>
						<p class="blog-share"><i class="fas fa-share-alt"></i> Share </p>
					</div><!-- .entry-meta -->
				</article><!-- #post-## -->
			<?php endwhile; ?>

			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>

			<div class="load-more">
				<a class="btn" href="#">Load More <i class="fas fa-chevron-down"></i></a>
			</div>
			<?php else : ?>

			<?php endif; ?>

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
					} else { ?>
					<ul class="popular-posts-grid">
						<li class="grid-item">
						<div class="grid-picture">
							<?php echo the_post_thumbnail(); ?>
						</div>
						<div class="grid-meta">
							<p class="entry-date">February 8, 2019</p>
							<h2 class="entry-title"><?php echo the_title(); ?></h2>
							<p class="entry-author">By Anny Nkune</p>
						</div>
					</li>
				</ul>

					<?php }
					wp_reset_postdata();
					?>
			</section>

			<section class="blog-archive">
				<i class="fas fa-boxes"></i>
				<h2>Blog Archives</h2>
				<div class="archive-dropdown">
					<button class="archive-btn">Select Month <i class="fas fa-chevron-down"></i></button>
					<ul class="archive-content">
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
