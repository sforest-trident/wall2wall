<?php
/**
 * Template Name: Contact
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

		<section class="section__content section__contact-form">
			<div class="inner">
				<article class="col-wrapper justify-content-between">
					<div class="content-body no-size col contact-form">
						<div class="cb__heading stacked-heading">
							<span class="top-line">Wall2Wall</span>
							<h2 class="bottom-line">Get In touch</h2>
						</div>
						<?php //echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
						<form action="" class="cb__form user-form" method="POST">
							<div class="form-row">
								<div class="form-group inline">
									<label for="name">First Name</label>
									<input type="text" name="firstname" id="firstname" required>
								</div>
								<div class="form-group inline">
									<label for="name">Last Name</label>
									<input type="text" name="lastname" id="lastname" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group inline">
									<label for="name">Your Number</label>
									<input type="telephone" name="telephone" id="telephone" required>
								</div>
								<div class="form-group inline">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="message">Company name</label>
									<input type="text" name="company" id="company">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" id="message" required></textarea>
								</div>
							</div>
							<div class="form-row">
								<input type="submit" value="Submit">
							</div>
						</form>
					</div>

					<?php include(locate_template('template-parts/component-sidebar.php')); ?>
				</article>
			</div>
		</section>

		<?php include(locate_template('template-parts/section_gallery-image-grid.php')); ?>

	<?php
	get_footer();
	?>
</main><!-- #main -->
