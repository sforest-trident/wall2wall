<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trident-web
 */

?>

	<footer class="site-footer">
		<section class="section__upper-footer bg-blue text-white">
			<div class="inner">	
				<div class="uf-col">
					<div class="uf__logo-block">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/w2w-logo.png" />
					</div>
					<div class="uf__content-block">
						<p>WALL2WALL Plastering are a specialist plastering service based in Suffolk and covering East Anglia</p>
					</div>
					<div class="uf__socials-block">
						<span class="sb__title">Follow Us:</span>
						<ul class="sb__items">
							<li class="sb__item"><a href="#" class="sb__item-link"><i class="fab fa-facebook-f icon__facebook"></i></a></li>
							<li class="sb__item"><a href="#" class="sb__item-link"><i class="fab fa-linkedin-in icon__linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="uf__nav-block uf-col">
					<?php
						wp_nav_menu(array('theme_location' => 'footer-primary'));
					?>
					<?php
						wp_nav_menu(array('theme_location' => 'footer-secondary'));
					?>
				</div>
				<div class="uf__contact-block uf-col">
					<ul>
						<li><a href="tel:0123456789"><i class="icon icon-map-pin"></i>01234 567 890</a></li>
						<li><a href="mailto:info@wall2wallplastering.co.uk"><i class="icon icon-map-pin"></i>info@wall2wallplastering.co.uk</a></li>
						<li><i class="icon icon-map-pin"></i>Stowmarket, Suffolk</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="section__lower-footer bg-l-blue text-white">
			<div class="inner">	
				<div class="lf__copyright-block">&copy; <?php echo date('Y'); ?>, All Rights Reserved</div>
				<div class="lf__nav-block">
					<?php
						wp_nav_menu(array('theme_location' => 'footer-secondary'));
					?>
				</div>
			</div>
		</section>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
