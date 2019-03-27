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
                <!-- About Header Text -->
                <section class="about-header">
                    <h1 class="header-text">Contact Us</h1>
                </section>
                <!-- Request Info Pop Out Button -->
                <a class="request-info-btn">
                    <h2>Request Information →</h2>
                </a>
                <!-- About Address -->
                <div class="address-container">
                    <p class="address-info">Calthorpe Community Gardens</p>
                    <p class="address-info">258-274 Grays Inn, WC1X 8LH</p>
                    <p class="address-info">+44 (0) 7968 912298</p>
                    <p class="address-info"> ann@bloomsburybeginnings.org</p>
                </div>
                <!-- End of Address -->
                <!-- Start of Entry Content - Google Map -->
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div>
                <!-- End of Entry Content -->
            </article>
            <!-- End of Post -->
            <!-- PHP Include for Request Form -->
            <section class="request">
                <?php include('form/request-info.php') ?>
            </section>
            <!-- End of PHP Include -->

		<?php endwhile; // End of the loop. ?>
            
	</main><!-- #main -->
</div><!-- #primary -->
    
<?php get_footer(); ?>
