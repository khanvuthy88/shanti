<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('video'); ?>>
	<?php if(is_singular()):
		$value = get_field( "_acf_video_url");
		echo $value;
	else: 
		shanti_volunteer_association_cambodia_video_thumbnail();
	endif; ?>

	<div class="content_block">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			?>
		</header><!-- .entry-header -->
		
		
		<?php if (is_singular()): ?>
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shanti-volunteer-association-cambodia' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shanti-volunteer-association-cambodia' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->


<?php if(is_singular()){ ?>

	<?php 
		$orig_post = $post;
		global $post;
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category){
				$category_ids[] = $individual_category->term_id;
			} 

			$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=> 3, // Number of related posts that will be shown.
				'ignore_sticky_posts'=>1,
				'post_type' => 'video'
			);

			$my_query = new wp_query( $args );
			if($my_query->have_posts()){
				echo '<div id="related_posts"><h3>អត្ថបទទាក់ទង</h3><ul>';
				while( $my_query->have_posts() ) {
					$my_query->the_post();?>

					<li>
						<div class="relatedthumb">
							<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">	
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="relatedcontent">
							<h2>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
									<?php the_title(); ?>
										
								</a>
							</h2>
						</div>
					</li>
				<?php  }
				echo '</ul></div>';
			}
		}
		$post = $orig_post;
		wp_reset_query(); 
}