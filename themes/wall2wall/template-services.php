<?php
/**
 * Template Name: Services
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
	<main id="primary" class="site-main page__service">
		<?php include(locate_template('template-parts/page-hero.php')); ?>

		<section class="section--cta-block bg-m-blue text-white">
			<div class="inner">
				<div class="ctab__heading">
					<div class="top-line text-blue">Wall2Wall Plastering</div>
					<div class="bottom-line text-white">Get in touch</div>
				</div>
				<div class="ctab__link-wrapper"><a href="#" class="btn btn--secondary">Contact</a></div>
			</div>
		</section>

		<section class="section--content">
			<div class="inner col-wrapper">
				<div class="content__wrapper col">
				<?php
					// Wordpress Default Page content shows here...
					if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
					?>
				</div>
				<div class="content__image-block in-step-gallery col">
					<div class="image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/services__plastering.jpg" alt="Gallery Image 1" /></div>
				</div>
			</div>
		</section>


		<?php //include(locate_template('template-parts/section_feature-points--services_plastering.php')); ?>

		<?php //include(locate_template('template-parts/section_image-panel.php')); ?>

		<?php //include(locate_template('template-parts/section_service-process--services_plastering.php')); ?>


	<?php
	get_footer();

	?>
</main><!-- #main -->
