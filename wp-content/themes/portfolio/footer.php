<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

<footer id="colophon" class="footer-wrapper">
	<div class="container">
		<div class="row footer-row align-items-center justify-content-center">
			<div class="col-md-6 col-sm-12">
				<a href="<?php echo get_home_url(); ?>"><img class="portfolio-logo" src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-26@2x.png'; ?>" alt="portfolio_logo" /><a href="<?php echo get_home_url(); ?>"></a>
			</div>
			<div class="col-md-6 col-sm-12 d-flex justify-content-end">
				<div class="right-content-wrapper d-flex flex-column">
					<div class="icon-wrapper">
						<a href="mailto:jasmeetkaursethi2@gmail.com"><img class="icon" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Icon-zocial-email.svg'; ?>" alt="mail" /></a>
						<a href="tel:8989898989"><img class="icon" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Icon-feather-phone-call.svg'; ?>" alt="phone" /></a>
						<a href="" target="_blank"><img class="icon" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Icon-awesome-linkedin.svg'; ?>" alt="linkedin" /></a>
					</div>
					<div class="contact-wrapper"><a href="<?php echo get_home_url() . '/contact'; ?>">Contact</a></div>
				</div>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>