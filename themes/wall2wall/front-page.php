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
	<main id="primary" class="site-main front-page">
		<?php include(locate_template('template-parts/page-hero.php')); ?>

		<?php
		get_template_part('template-parts/hero_quicklinks');
		?>

		<section class="section--content">
			<div class="inner col-wrapper">
				<div class="content__wrapper col">
					<?php /*
					<h3 class="content__heading"><span class="top-line text-m-blue">Welcome to</span><span class="bottom-line">Wall2Wall</h3>
					<p class="about-description">Based in Suffolk and covering East Anglia, Wall2Wall is a specialist plastering service delivering top-quality plastering and dry lining services for over 16 years. As the professionals’ choice, we cater to the commercial sector, offering a complete range of services from screeding, dry lining, insulating, coving, decorating, to wall removals. Upholding our commitment to superior workmanship, customer satisfaction, and timely delivery, we consistently set ourselves apart. Experience the Wall2Wall difference today and allow us to exceed your expectations.</p>
					<div class="about-cta-wrapper cta-wrapper"><a href="#" class="btn btn--primary bg-m-blue text-white">Get in touch</a></div>
					*/ ?>	

					<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php
						endwhile;
					else :
						echo '<p>No content found.</p>';
					endif;
					?>
				</div>
				<div class="content__image-block in-step-gallery col">
					<div class="image-block__item"><img src="<?php echo get_template_directory_uri(); ?>/images/content-images/home.jpg" alt="Gallery Image 1" /></div>
				</div>
			</div>
		</section>

		<?php include(locate_template('template-parts/section_client-grid.php')); ?>

		<section class="section--cta-block bg-m-blue text-white">
			<div class="inner">
				<div class="ctab__heading">
					<div class="top-line text-blue">Wall2Wall</div>
					<div class="bottom-line text-white">Latest Projects</div>
				</div>
				<div class="ctab__link-wrapper"><a href="#" class="btn btn--secondary">More Projects</a></div>
			</div>
		</section>

		<?php include(locate_template('template-parts/section_latest-projects_showcase.php')); ?>

		<?php include(locate_template('template-parts/section_promo-incentives.php')); ?>

		<?php include(locate_template('template-parts/section_testimonials.php')); ?>

		<?php include(locate_template('template-parts/section_gallery-image-grid.php')); ?>

	<?php
	get_footer();

	?>
</main><!-- #main -->
