<?php
/**
 * The main template file.
 *
 * @package Bloomsbury_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<!-- Start of Home Hero -->
			<section class="home-hero">
				<h2 class="">Bloomsbury Beginnings</h2>
				<h1 class="hero-title">Grow Your Ideas</h1>
				<p class="sub-title-p">We help people with great ideas start successful social and environmental impact ventures</p>
			</section>
			<!-- End of Home Hero -->

			<!-- Start of Request Info -->
			<a class="request-info-btn">
				<h2>Request Information →</h2>
			</a>

			<!-- Start of Info below Hero -->
			<section class="info">
				<h2 class="info-title">What We Offer</h2>
				<!-- <h2>What We Offer</h2> -->
				<ul class="info-list">
					<li class="info-list-item">
						<img src="https://via.placeholder.com/50">
						<div class="info-container">
							<h2>Build Your Business Plan</h2>
							<p> It's easier to get somewhere when you've got people along with you.</p>
						</div>
					</li>
					<li class="info-list-item">
						<img src="https://via.placeholder.com/50">
						<div class="info-container">
							<h2>Get Expert Advice</h2>
							<p>Through events, workshops, one-to-ones and our interactive members area, you will be guided by our range of subject experts.</p>
						</div>
					</li>
					<li class="info-list-item">
						<img src="https://via.placeholder.com/50">
						<div class="info-container">
							<h2>Grow Your Network</h2>
							<p>Join the Bloomsbury Beginnings family! Our Supportive network of peers will be your network for life.</p>
						</div>
					</li>
					<li class="info-list-item">
						<img src="https://via.placeholder.com/50">
						<div class="info-container">
							<h2>Get Parental Support</h2>
							<p> With our on-site creche and child-friendly approach, the course is suitable for any parent.</p>
						</div>
					</li>
				</ul>
			</section>
			<!-- End of Info -->

			<!-- Our Story --> 
			<section class="our-section">
				<div class="story-photo">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/ourstory.png'?>">
				</div>
				<div class="our-story">
					<h2>Our Story</h2>
					<p>Bloomsburg Beginnings was set up by Ann Nkune in 2013. Over the last 6 years the organisation has supported more than 500 start ups, freelancers, small business owners and career changers to successfully focus and grow their value propositions.</p>
				</div>
			</section>
			<!-- End of Our Story --> 

			<!-- Start of Our Programmes -->
			<section class="our-programmes">
				<h2>Our Programmes</h2>
				<div class="programmes-grid">
					<div class="programmes">
						<h3>Taster Sessions</h3>
						<p>Try out three-session programme: learn to create a business plan and start to build your network.</p>
						<a class="btn">Read More →</a>
					</div>
					<div class="programmes">
						<h3>Grow Your Idea</h3>
						<p>Ready to start developing your idea? Create and test your business plan, grow your network and receive one-on-one tailored advice.</p>
						<a class="btn">Read More →</a>
					</div>
				</div>
			</section>
			<!-- End of Our Programmes --> 

			<!-- Start of Reviews -->
			<section class="our-reviews">
				<div class="review-container">
					<div class="review-text">
						<p>I launched my business in 2018 with Ann's methods and strategies which helped me focus my ideas into a solid business plan.</p>
					</div>
					<hr>
					<div class="review-author">
						<h4>Shaamikh Al Hakim</h4>
						<p>Founder, Greener Shoes</p>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri() . '/assets/images/hakim.png'?>">
			</section>
			<!-- End of Reviews -->

			<!-- Start of Partners --> 
			<section class="our-partners">
				<h2>Our Partners</h2>
				<div class="partners">
					<img src="<?php echo get_template_directory_uri() . '/assets/partners/business.png'?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/partners/rsa.png'?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/partners/rbs.png'?>">
				</div>
			</section>
			<!-- End of Partners --> 

			<!-- Start of Community -->
			<section class="our-community">
				<h2 class="community-title">Learn and Grow with our Community</h2>
				<div class="community-grid">
					<div class="community-containers">
						<i class="fas fa-cogs"></i>
						<h2>6</h2>
						<p>Years in Business</p>
					</div>
					<div class="community-containers">
						<i class="far fa-building"></i>
						<h2>194</h2>
						<p>Businesses Launched</p>
					</div>
					<div class="community-containers">
						<i class="fas fa-star"></i>
						<h2>500</h2>
						<p>Start-ups Worked With</p>
					</div>
					<div class="community-containers">
						<i class="fas fa-graduation-cap"></i>
						<h2>859</h2>
						<p>Goals for 2019</p>
					</div>
				</div>
			</section>
			<!-- End of Community -->

			<!-- Start of Online Community -->
			<section class="online-community">
				<div class="online-info">
					<h2>Online Community</h2>
					<p>Join the Bloomsbury Beginnings community! Our online member's area is free to all students and is your one-stop-shop for all support.</p> 
					<a href="#">Read More</a>
				</div>
					<img src="<?php echo get_template_directory_uri() . '/assets/images/phone.png'?>">
			</section>
			<!-- End of Online Community -->

			<!-- Start of Assocation -->
			<section class="association">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/sunflower.png'?>">
				<div class="association-info">
					<h2>Calthorpe Community Garden</h2>
					<p>Working in association with Calthorpe inner city community garden we strive to improve the physical and emotional well-being of those who live, work or study in Camden and surrounding areas.</p>
			</section>
			<!-- End of Assocation -->

			<section class="request">
				<?php include('form/request-info.php') ?>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>






