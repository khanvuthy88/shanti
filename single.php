<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_sidebar(); ?>
		<div class="main-content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );				

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->
	<?php if (get_field('_acf_book_picture', get_the_ID())): ?>
			<div id="book_block">
				<div class="book_block_bar">
					<a class="icon quit"></a>
				</div>
				
				<div class="flipbook-viewport">
					<div class="container">
						<div class="flipbook">
							<?php while( the_repeater_field('_acf_book_picture', get_the_ID()) ) { ?>
								<div style="background-image:url('<?php echo get_sub_field('_acf_book_page'); ?>')" width="100%" height="100%"></div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
    	<?php endif ?>

<?php
get_footer();
