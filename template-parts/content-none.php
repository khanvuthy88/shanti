<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'shanti-volunteer-association-cambodia' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'shanti-volunteer-association-cambodia' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'shanti-volunteer-association-cambodia' ); ?></p>
			
			<div class="searach_box">
				<span class="screen-reader-text">ស្វែងរក៖</span>
				<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
					<label>							
						<input type="search" class="search-field" placeholder="ស្វែង​រក …" value="" name="s">
					</label>
					<input type="submit" class="search-submit" value="ស្វែង​រក">
				</form>
			</div>
			<?php

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'shanti-volunteer-association-cambodia' ); ?></p>
			<div class="searach_box">
				<span class="screen-reader-text">ស្វែងរក៖</span>
				<form role="search" method="get" class="search-form" action="http://shanti-volunteer.local/">
					<label>							
						<input type="search" class="search-field" placeholder="ស្វែង​រក …" value="" name="s">
					</label>
					<input type="submit" class="search-submit" value="ស្វែង​រក">
				</form>
			</div>
			<?php
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
