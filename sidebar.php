<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="fb-page" data-href="https://www.facebook.com/SVA-Cambodia-341641509254935" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SVA-Cambodia-341641509254935" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SVA-Cambodia-341641509254935">SVA Cambodia</a></blockquote></div>
</aside><!-- #secondary -->
