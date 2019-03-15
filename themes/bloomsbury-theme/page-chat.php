<?php
/**
 * The main template file.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<ul id="messages">
            </ul>

            <input type="text" name="message-input" />
            <button id="submit-message">
                Send
            </button>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
