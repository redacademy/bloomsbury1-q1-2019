<?php
/**
 * The template for displaying archive pages.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts() ) : the_post();  ?>

        <h2 class="entry-title">Courses & </br>Taster Sessions</h2>
        <!-- courses square div -->
    <section class="courses-grid">
        <?php $posts_array = get_posts (
            array(
                'post_type' => 'courses',
                'post_per_page' => -1,
                'post_status' => 'publish'
            )
        );

        foreach ($posts_array as $post) { ?>

        <div class="courses-grid-item">
            <a href="<?php echo the_permalink() ?>">
                <div class="courses-info">
                    <h5 class="courses-header"><?php echo the_title();?></h5>
                    <p class="courses-location"><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get('location'); ?></p>
                </div>
                </a>
                <?php
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'small' );
                echo '<div class="courses-right" style="background: url('. $url .'); background-size: cover; background-position: center" >'; ?>
                    <p class="courses-date"><strong><?php echo CFS()->get('date');?> </strong></p>
                </div>
        </div>
        <?php } ?>
    </section>
    <?php endif; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
