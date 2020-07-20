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
	<script>
		window.addEventListener("DOMContentLoaded", function(){
			if (window.navigator.userAgent.indexOf("Trident/") > 0){
				document.body.classList.add("noSupport");
			}
		});
	</script>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/vendors/font-awesome/css/font-awesome.min.css'; ?>">
</head>

<body <?php body_class(); ?>>
<div id="ie_non_support">
	<div class="message_non_support_box">
		<h1>Warning</h1>
		<p>Internet Explorer is not supported and some platform functionality may not be stable , Please switch to other browsers like Chrome, FireFox or Safari.</p>
	</div>
</div>
<?php wp_body_open(); ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=1021191597935387&autoLogAppEvents=1" nonce="78YaF2nP"></script>

<div id="mobile_sidenav">
	<a href="javascript:void(0)" class="closebtn"><i class="fa fa-times fa-2x"></i></a>
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