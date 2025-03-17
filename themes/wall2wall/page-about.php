<?php
/**
 * Template Name: About Page
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
					<div class="image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/about.jpg" alt="Gallery Image 1" /></div>
				</div>
			</div>
		</section>

		<?php include(locate_template('template-parts/section_meet-the-team.php')); ?>

		<?php include(locate_template('template-parts/section_promo-incentives.php')); ?>

		<?php include(locate_template('template-parts/section_gallery-image-grid.php')); ?>
		</section>

	<?php
	get_footer();

	?>
</main><!-- #main -->
