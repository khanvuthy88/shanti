<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_sidebar(); ?>
		<div class="main-content">
			<div class="content_wrapper">
				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			<div class="pagination">
				<?php the_posts_navigation(); ?>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
