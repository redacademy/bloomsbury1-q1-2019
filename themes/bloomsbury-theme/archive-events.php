    <?php
/**
 * The template for displaying all pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts() ) : the_post();  ?>

        <h1 class="main-text">Events</h1>
        <!-- events square div -->
    <section class="event-grid">
        <?php $posts_array = get_posts (
            array(
                'post_type' => 'events',
                'post_per_page' => 4,
                'post_status' => 'publish'
            )
        );

        foreach ($posts_array as $post) { ?>

        <div class="event-grid-item">
            <a href="<?php echo the_permalink(); ?>">
                <div class="event-info">
                    <h5 class="event-header"><?php echo the_title();?></h5>
                    <p class="event-location"><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get('location'); ?></p>
                    <p class="event-text"><?php echo the_content();?> </p>
                </div>
            </a>
                <div class="event-right">
                    <p class="event-date"><strong><?php echo CFS()->get('date');?> </strong></p>
                </div>
        </div>
        <?php } ?>
        </section>
        <?php endif; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
