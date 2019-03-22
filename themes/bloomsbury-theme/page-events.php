<?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <!-- Start of Page -->
        <div class="nav-bar">
        <!-- add header here -->
        </div>
        <!-- main text -->
        <h1 class="main-text">Events</h1>
        <!-- events square div -->
        <div class="event-container">
            <div class="event-info">
                <h5 class="event-header">Easter Dinner</h5>
                <p class="event-location"><i class="fas fa-map-marker-alt"></i> london</p>
                <p class="event-text">Our anniual summit bringing together leading enablers of youth social action </p>
                
            </div>
            <div class="event-right">
                <p class="event-date"><strong>7th<br>May</strong></p>
            </div>
        </div>
        <br>
        <!-- FOR MONDAY PRESENTATION ONLY -->
        <div class="event-container">
            <div class="event-info">
                <h5 class="event-header">Easter Dinner</h5>
                <p class="event-location"><i class="fas fa-map-marker-alt"></i> london</p>
                <p class="event-text">Our anniual summit bringing together leading enablers of youth social action </p>
                
            </div>
            <div class="event-right">
                <p class="event-date"><strong>7th<br>May</strong></p>
            </div>
        </div>
        <br>
        <div class="event-container">
            <div class="event-info">
                <h5 class="event-header">Easter Dinner</h5>
                <p class="event-location"><i class="fas fa-map-marker-alt"></i> london</p>
                <p class="event-text">Our anniual summit bringing together leading enablers of youth social action </p>
                
            </div>
            <div class="event-right">
                <p class="event-date"><strong>7th<br>May</strong></p>
            </div>
        </div>
        <!-- TOP TO BE DELETE AFTER THE PRESENTATION -->
        <a class="blue-square-btn">read more  <i class="fas fa-arrow-right"></i></a>
        <!-- End of Page -->
        <?php while ( have_posts() ) : the_post(); ?>
        
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
        
        <?php endwhile; // End of the loop. ?>
        
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
