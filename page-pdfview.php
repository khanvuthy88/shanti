<?php
/**
* Template Name: PDF View page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>

<div id="primary" class="site-content">
	<div id="page_pdfview_id" role="main">		
		<?php 
			global $wp_query;
			if(isset($wp_query->query_vars['pid'])){
				$value = get_field( "_acf_pdf_file", $wp_query->query_vars['pid']);
				if ($value) { ?>
					<embed src="<?php echo $value; ?>" ype="application/pdf" width="100%" height="100%">
				<?php }
			}
		?>
	</div>
</div>

<?php get_footer(); ?>