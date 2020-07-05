<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/vendors/font-awesome/css/font-awesome.min.css'; ?>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="mobile_sidenav">
	<a href="javascript:void(0)" class="closebtn">&times;</a>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
	?>
</div>


<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a title="<?php echo get_bloginfo( 'name' ); ?>" href="<?php echo get_home_url(); ?>">
				<img class="mobile_display" src="<?php echo get_template_directory_uri().'/assets/images/logo.jpg'; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"/>
				<img class="desktop_display" style="width: 100%; height: auto;" src="<?php echo get_template_directory_uri().'/assets/images/website_banner.jpg'; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"/>
			</a>
			<?php
			// the_custom_logo();
			?>
			<div class="menu-toggle_mobile">
				<span id="menu_toggle_id" class="menu-toggle">
					<i class="fa fa-bars"></i>
				</span>
			</div>

		</div><!-- .site-branding -->
	</header><!-- #masthead -->