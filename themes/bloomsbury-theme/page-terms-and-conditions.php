<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- Start of page -->
        <section class="header">
            <!-- background linear-gradient(#01ADB5, #4a90e2) -->
            <div class="page-cover">
                <h1 class="header-text">Terms & Conditions</h1>
                <p class="under-text">T&C Privacy</p>
            </div>
		</section>
            <!-- end of page -->
			<?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            
			<?php endwhile; // End of the loop. ?>
            
		</main><!-- #main -->
	</div><!-- #primary -->
    
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
