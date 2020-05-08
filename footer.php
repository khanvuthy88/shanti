<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shanti-volunteer-association-cambodia' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'shanti-volunteer-association-cambodia' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'shanti-volunteer-association-cambodia' ), 'shanti-volunteer-association-cambodia', '<a href="https://plus.google.com/u/0/113587414402501665542">Khan Vuthy</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="<?php echo get_template_directory_uri().'/dist/app.js'; ?>"></script>
<?php wp_footer(); ?>

</body>
</html>
