<?php
/**
 * Template part for displaying posts
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
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			?>
		</header><!-- .entry-header -->
		
		<?php if(is_singular()): ?>
				<div class="post_summary">
					<?php echo book_author_taxonomies_terms_links() ?>
					<div class="button_actions">
						<button data-url="<?php echo bloginfo('url').'/book-pdf-view?pid='.get_the_ID(); ?>" id="read_book_story">
							<img src="<?php echo get_template_directory_uri().'/assets/images/booking.svg'; ?>"/>Read Story</button>
						<button id="save_off_line">Save Off line</button>
					</div>
				</div>
		<?php endif ?>
		<?php if(! is_singular()): ?>
			<div class="entry-content">
				<?php 
				$terms = get_the_terms( $post, 'book_author' );
				$terms_illustrator = get_the_terms( $post, 'illustrator' );
 
		        if ( ! empty( $terms ) ) {
		        	?>
		        	<div class="book_author">
		        		<h2>Author:</h2>
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
		        		<h2>Illustrator:</h2>
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
		<?php endif ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php if(is_singular()): ?>
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
				'ignore_sticky_posts'=>1
			);

			$my_query = new wp_query( $args );
			if($my_query->have_posts()){
				echo '<div id="related_posts"><h3>Related Posts</h3><ul>';
				while( $my_query->have_posts() ) {
					$my_query->the_post();?>

					<li>
						<div class="relatedthumb">
							<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">	
								<?php the_post_thumbnail(); ?>
								<div class="like_and_read_number">
									<div class="like_read">
										<div class="like"><i class="fa fa-heart" aria-hidden="true"></i> 333</div>
										<div class="read"><i class="fa fa-book" aria-hidden="true"></i> 333</div>
									</div>
									<div class="level">
										<p>level 34</p>
									</div>
								</div>
							</a>
						</div>
						<div class="relatedcontent">
							<h2>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
									<?php the_title(); ?>										
								</a>
							</h2>
							<?php 
								if(is_single() && 'post' == get_post_type()){ ?>

									<?php 
									$terms = get_the_terms( $post, 'book_author' );
									$terms_illustrator = get_the_terms( $post, 'illustrator' );
					 
							        if ( ! empty( $terms ) ) {
							        	?>
							        	<div class="book_author">
							        		<h2>Author:</h2>
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
							        		<h2>Illustrator:</h2>
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

								<?php }?>
						</div>
					</li>
				<?php  }
				echo '</ul></div>';
			}
		}
		$post = $orig_post;
		wp_reset_query(); 
}