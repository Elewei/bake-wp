<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bake
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  	<!-- =====Header SECTION ==== -->  
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
					<img class="d-inline-block align-top" src="<?php echo get_theme_file_uri( 'assets/img/logo.png'); ?>" width="40" height="30">
					<?php echo get_bloginfo('name'); ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<!--
					<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					<a class="nav-link" href="<?php echo esc_url(home_url()); ?>">主页 <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="product.html">产品</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="about.html">关于</a>
					</li>
					</ul>
					-->
					
					<?php 
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarCollapse',
							'menu_class'      => 'nav navbar-nav',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
							) );
					?>
					
				</div>
			</div>
		</nav>
	</header>