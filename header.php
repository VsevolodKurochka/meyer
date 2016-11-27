<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meyer
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="vnav">
		<div class="vcontainer">
			<div class="vrow">
				<div class="vnav-inner max-md-negative">
					<div class="vcol-xs-12 vcol-md-4">
						<div class="vnav-logo">
							<button type="button" class="vnav-menu-btn" data-menu=".vnav-menu"><span></span></button>
		          <div class="block-inline visible-md visible-lg">
		          	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
		          </div>
		          <div class="block-inline hidden-md hidden-lg">
		          	<img src="<?php echo get_template_directory_uri();?>/img/logo-responsive.png" alt="">
		          </div>
		      	</div>
					</div>
					<div class="vcol-xs-12 vcol-md-6 vcol-lg-5 vpull-md-right text-md-right vnav-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<div class="vnav-share">
							<div class="vnav-share-inner"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/share-fb.png" alt=""></a></div>
							<div class="vnav-share-inner"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/share-link.png" alt=""></a></div>
						</div>
					</div>
				</div><!-- vnav-inner -->
			</div><!-- .vrow -->
		</div><!-- .vcontainer -->
	</nav>
	<main class="main">
