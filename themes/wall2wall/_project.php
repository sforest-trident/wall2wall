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
					<h2 class="hero__title">Alder Meadow</h2>
				</div>
			</div>	
		</section>

		<section class="section--content section__page-intro">
			<div class="inner">
				<div class="content__wrapper">
					<div class="page-intro col-wrapper">
						<h2 class="pi__title stacked-heading col">
							<span class="top-line text-l-blue">Alder Meadow</span>
							<span class="bottom-line">Redbourne Homes</span>
						</h2>
						<div class="pi__body col">
							<p>Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section__content section__project-showcase">
			<div class="inner project-showcase">
				<article class="ps__item">
					<div class="item__img-block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sample-property.jpg" alt="" />
					</div>
					<div class="item__details bg-l-blue text-white">
						<span class="id__heading">Overview</span>
						<div class="id__feature-list">
							<dl class="fl__row">
								<dt class="fl__col fl_title text-blue text-bold">Project</dt>
								<dd class="fl__col fl_desc">2, 3 & 4 Bedroom houses</dd>
							</dl>
							<dl class="fl__row">
								<dt class="fl__col fl_title text-blue text-bold">Services</dt>
								<dd class="fl__col fl_desc">Plastering</dd>
							</dl>
							<dl class="fl__row">	
								<dt class="fl__col fl_title text-blue text-bold">Location</dt>
								<dd class="fl__col fl_desc">Ipswich, Suffolk</dd>
							</dl>
							<dl class="fl__row">
								<dt class="fl__col fl_title text-blue text-bold">Client</dt>
								<dd class="fl__col fl_desc">Redbourne Homes</dd>
							</dl>
						</div>

						<div class="id__map">
							<img src="<?php echo get_template_directory_uri(); ?>/images/sample-map-placeholder.png" alt="Map" />
						</div>  
					</div>
				</article>
			</div>
		</section>

		<section class="section__featured-project-grid section__wall-grid bg-blue text-white">
			<div class="inner pb-2 col-wrapper">
				<div class="fpg__content col cal-half">
					<div class="fpg__heading stacked-heading">
						<span class="top-line text-l-blue">Alder Meadow</span>
						<span class="bottom-line">About the Project</span>
					</div>
					<div class="fpg__body">
						<p>Alder Meadow is a collection of 52 beautiful 2, 3 & 4 bedroom houses, nestled in the heart of the Suffolk countryside. Designed by local architects Wincer Kievenaar, each property showcases exceptional craftsmanship and high-quality finishes, creating a harmonious blend of style and functionality. With private parking and a garage included with every plot, convenience and practicality are seamlessly integrated into the design.</p>
					</div>
				</div>
			</div>
			<div class="inner pt-0 wall-grid">
				<div class="gallery">
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
					<!-- faux 7th item to see if CSS is kicking in to hide it -->
					<figure class="gallery__item ig__item grid__item gallery__img">
						<img class="fpg__img gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/home-img2.jpg" alt="" />
					</figure>
				</div>
			</div>
		</section>

		<section class="section--content section__site-plan">
			<div class="inner col-wrapper site-plan">
				<div class="col sp__content">
					<div class="sp__heading stacked-heading">				
						<span class="top-line text-l-blue">Alder Meadow</span>
						<span class="bottom-line text-blue">Development Site Plan</span>
					</div>
					<div class="sp__body">
						<p>Itatum fugit aut illabor erspedignam nonserro dolorrovid mi, nis rem facime volent ea dolupti usandam, quam que res expligenis restinia dene illiassi utatio omnihillupta as et occus isquis ipis nossequae sintis adiciatur renis et odi.</p>
					</div>
				</div>
				<div class="col">
					<figure class="sp__img-block">
						<img class="sp__img" src="<?php echo get_template_directory_uri(); ?>/images/sample-site-plan.png" alt="Site Plan" />
					</figure>
				</div>
			</div>
		</section>

	<?php
	get_footer();
	?>
</main><!-- #main -->
