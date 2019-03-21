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
                <h1 class="header-text">Contact Us</h1>
                <p class="under-text">How To Reach Us</p>
            </div>
        </section>
        <section class="bottom">
            <div class="dashboard-canvas">
                <p class="address-info">C/O Calthorpe Project <br> 258-274 Grays Inn Road WC1X 8LH <br>TEL:     +44 (0) 7968 912298<br>Email:  ann@bloomsburybeginnings.org</p>
            </div>
        </section>
        <!-- Google Maps -->
        <div class="mapouter"><div class="gmap_canvas"><iframe width="411" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=WC1X%208LH&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:330px;}</style></div></div> 
            <!-- end of page -->
			<?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            
			<?php endwhile; // End of the loop. ?>
            
		</main><!-- #main -->
	</div><!-- #primary -->
    
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
