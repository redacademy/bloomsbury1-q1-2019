<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Search">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
