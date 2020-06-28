<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php shanti_volunteer_association_cambodia_post_thumbnail(); ?>
	<div class="content_block">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header>
		<?php if ( 'post' === get_post_type() ) : ?>			
			<div class="entry-content">
				<?php 
				$terms = get_the_terms( $post, 'book_author' );
				$terms_illustrator = get_the_terms( $post, 'illustrator' );

		        if ( ! empty( $terms ) ) {
		        	?>
		        	<div class="book_author">
		        		<h2>អ្នកនិពន្ធ</h2>
		        		<div>:</div>
		        		<ul>
		        			<?php foreach ($terms as $term) { ?>
		        				<li>
		        					<a href="<?php echo esc_url(get_term_link($term->slug, 'book_author')) ?>">
		        						<?php echo esc_html($term->name) ?>
				        			</a>
				        		</li>
		        			<?php } ?>
		        		</ul>
		        	</div>		        	
		        <?php } ?>
		        <?php if (! empty($terms_illustrator)) { ?>
		        	<div class="illustrator">
		        		<h2>អ្នកគូររូប</h2>
		        		<div>:</div>
		        		<ul>
		        			<?php foreach ($terms_illustrator as $term) { ?>
		        				<li>
		        					<a href="<?php echo esc_url(get_term_link($term->slug, 'illustrator')) ?>">
		        						<?php echo esc_html($term->name) ?>
				        			</a>
				        		</li>
		        			<?php } ?>
		        		</ul>
		        	</div>
		        <?php } ?>
			</div><!-- .entry-content -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
