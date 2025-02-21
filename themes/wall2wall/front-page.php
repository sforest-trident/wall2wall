<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swift-exchange
 */

get_header();
?>
	<main id="primary" class="site-main">
		<section class="section--hero hero__bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg);">
			<div class="inner">
				<div class="hero__content">
					<h2 class="hero__title">Transforming Spaces With High-Quality Plastering</h2>
					<div class="hero__subtitle">
						<ul>
							<li>PLASTERING</li>
							<li>DRY LINING</li>
							<li>SKIMMING</li>
							<li>RENDERING</li>
							<li>RENOVATION SERVICES</li>
						</ul>
					</div>
					<div class="hero__cta-wrapper cta-wrapper"><a href="#" class="btn btn--primary">Get a Quote</a></div>
				</div>
			</div>	
		</section>

		<section class="section--services section--feature-quick-links">
			<div class="inner">
				<ul class="cta--quick-links feature-quick-links">	
					<li class="fql__item">
						<div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-brick-wall.png" alt="Plastering Icon" /></div>
						<div class="service-title">Plastering</div>
					</li>
					<li class="fql__item">
						<div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-drywall.png" alt="Plastering Icon" /></div>
						<div class="service-title">Dry Lining</div>
					</li>
					<li class="fql__item">
						<div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-plastering.png" alt="Plastering Icon" /></div>
						<div class="service-title">Partitioning</div>
					</li>
				</ul>
			</div>
		</section>

		<section class="section--content">
			<div class="inner">
				<div class="content__wrapper">
					<h3 class="content__heading"><span class="top-line text-m-blue">Welcome to</span><span class="bottom-line">Wall2Wall Plastering</h3>
					<p class="about-description">Based in Suffolk and covering East Anglia, Wall2Wall Plastering is a specialist plastering service delivering top-quality plastering and dry lining services for over 16 years. As the professionals’ choice, we cater to the commercial sector, offering a complete range of services from screeding, dry lining, insulating, coving, decorating, to wall removals. Upholding our commitment to superior workmanship, customer satisfaction, and timely delivery, we consistently set ourselves apart. Experience the Wall2Wall Plastering difference today and allow us to exceed your expectations.</p>
					<div class="about-cta-wrapper cta-wrapper"><a href="#" class="btn btn--primary bg-m-blue text-white">Get in touch</a></div>
				</div>
				<div class="content__image-block in-step-gallery">
					<div class="image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img1.jpg" alt="Gallery Image 1" /></div>
					<div class="image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="Gallery Image 2" /></div>
				</div>
			</div>
		</section>

		<section class="section--client-grid image-grid mb-2">
			<div class="inner">
			<div class="marquee">
            	<ul class="mq__group">
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>
					<li class="mq__item image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></li>						
				</ul>

				<script>
					(function() {
						// -- Duplicate the marquee group to create a seamless loop, then append to the marquee container.
						// Find marquee elements
						var elems = document.querySelectorAll('.mq__group');
						// Loop through the selected elements and clone them.
						for (var i = 0 ; i < elems.length; i++) {
							elem = elems[i];
							var clone = elem.cloneNode(true);
							elem.after(clone);
						}
					})();
				</script>
			</div>
		</section>

		<section class="section--cta-block bg-m-blue text-white">
			<div class="inner">
				<div class="ctab__heading">
					<div class="top-line text-blue">Wall2Wall Plastering</div>
					<div class="bottom-line text-white">Latest Projects</div>
				</div>
				<div class="ctab__link-wrapper"><a href="#" class="btn btn--secondary">More Projects</a></div>
			</div>
		</section>
		
		<section class="section--featured-projects mb-2">
			<div class="inner">
				<ul class="features-grid image-grid">
					<li class="fpg__item grid-item">
						<a href="#" class="fpg__wrapper">
							<span class="fpg__title">Orchard Gardens</span>
							<img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
						</a>
					</li>
					<li class="fpg__item grid-item">
						<a href="#" class="fpg__wrapper">
							<span class="fpg__title">Orchard Gardens</span>
							<img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
						</a>
					</li>
					<li class="fpg__item grid-item">
						<a href="#" class="fpg__wrapper">
							<span class="fpg__title">Orchard Gardens</span>
							<img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
						</a>
					</li>
					<li class="fpg__item grid-item">
						<a href="#" class="fpg__wrapper">
							<span class="fpg__title">Orchard Gardens</span>
							<img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
						</a>
					</li>
				</ul>
			</div>
		</section>

		<section class="section--incentives-block bg-blue text-white">
			<div class="inner incentives-block">
				<div class="ib__col">
					<div class="ib__heading">
						<span class="top-line">Wall2Wall Plastering</span>
						<span class="bottom-line">Why Choose Us?</span>
					</div>
					<div class="ib__content">
						<p>Trusting your plastering services to us means more than just a beautifully finished wall. As the professionals’ choice, we pride ourselves on our wealth of experience, skilled team, and commitment to using only top-quality materials. We work with the utmost professionalism, always respecting your time, property, and budget.</p>
					</div>
				</div>
				<div class="ib__col">
					<ul class="ib__feature-list">
						<li class="ib__feature-list-item">Experienced</li>
						<li class="ib__feature-list-item">Top-quality materials</li>
						<li class="ib__feature-list-item">Tailored Solutions</li>
						<li class="ib__feature-list-item">Quick Turnaround Time</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="section--reviews google-reviews">
			<div class="inner">
				<div class="rv__heading text-blue">Testimonials</div>
				<div>[Reviews Placeholder]</div>
			</div>
		</section>

		<section class="section--image-grid mb-2">
			<div class="inner image-grid row-grid">
				<div class="ig__item grid__item"><img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></div>
				<div class="ig__item grid__item"><img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></div>
				<div class="ig__item grid__item"><img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></div>
				<div class="ig__item grid__item"><img class="fpg__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" /></div>
			</div>
		</section>

	<?php
	get_footer();

	?>
</main><!-- #main -->
