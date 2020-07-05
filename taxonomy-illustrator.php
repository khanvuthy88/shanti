<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

get_header();
?>

	<main id="primary" class="site-main illustrator">
		<?php get_sidebar(); ?>
		<div class="main-content">
			<div class="content_wrapper">
			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;				
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			echo '</div>';
			echo '<div class="pagination">';
					the_posts_navigation();
				echo "</div>";
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
