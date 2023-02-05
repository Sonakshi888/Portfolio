<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/276d03a27b.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portfolio'); ?></a>
		<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation navbar-expand-md">
				<div class="container">
					<div class="nav-contain-div row flex-row align-items-center">
						<div class="header-logo-wrapper col-md-6">
							<a href="<?php echo get_home_url(); ?>"><img class="portfolio-logo" src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-26@2x.png'; ?>" alt="portfolio_logo" />
							</a>
						</div><!-- .site-branding -->

						<div class="hamburger-btn col-md-6">
							<button type="button" class="navbar-toggle" data-bs-target="#navbarCollapse" data-bs-toggle="collapse">
								<i class="fa-solid fa-bars fa-lg"></i>
							</button>
						</div>

						<div class="col-md-6 text-center collapse navbar-collapse d-flex justify-content-end">
							<?php
							wp_nav_menu(
								array(
									'menu'	=>	"primary-navigation",
									"menu_class"	=>	"nav navbar-nav d-flex primary",
									"menu_id"	=>	"primary-menu",
									"container"	=>	"div",
									"theme-location"	=> "menu-1"
								)
							);
							?>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->