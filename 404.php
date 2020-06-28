<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'shanti-volunteer-association-cambodia' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'shanti-volunteer-association-cambodia' ); ?></p>

				<div class="searach_box">
					<span class="screen-reader-text">ស្វែងរក៖</span>
					<form role="search" method="get" class="search-form" action="http://shanti-volunteer.local/">
						<label>							
							<input type="search" class="search-field" placeholder="ស្វែង​រក …" value="" name="s">
						</label>
						<input type="submit" class="search-submit" value="ស្វែង​រក">
					</form>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
