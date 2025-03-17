<?php
/**
 * Template Name: Projects
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
		<?php include(locate_template('template-parts/page-hero.php')); ?>

		<section class="section--content section__page-intro">
			<div class="inner">
				<div class="content__wrapper">
					<div class="page-intro col-wrapper">
					<?php
					// Wordpress Default Page content shows here...
					if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
					?>
					</div>
				</div>
			</div>
		</section>

		<?php include(locate_template('template-parts/section_latest-projects.php')); ?>

		<?php include(locate_template('template-parts/section_cta-block.php')); ?>

		<?php include(locate_template('template-parts/section_promo-incentives.php')); ?>

		<?php include(locate_template('template-parts/section_gallery-image-grid.php')); ?>

	<?php
	get_footer();

	?>
</main><!-- #main -->
