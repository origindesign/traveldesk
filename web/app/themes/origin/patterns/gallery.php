<?php
/**
 * Title: Image gallery
 * Slug: origin/image-gallery
 * Categories: theme, images
 * Block Types: core/group
 *
 * @package origin
 * @since 1.0.0
 */

?>

<!-- wp:group {"templateLock":"contentOnly","className":"is-style-gallery is-full-width-container fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-gallery is-full-width-container fade-in">
	<!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="http://placehold.it/500x500" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"width":"318px","sizeSlug":"medium"} -->
			<figure class="wp-block-image size-medium is-resized"><img src="http://placehold.it/350x350" alt="" style="width:318px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Inside <sub>TravelDesk</sub></h2>
			<!-- /wp:heading -->
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="http://placehold.it/950x750" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p>Wharetra mattis leo fermentum egestas. Integer consectetur sit diam in in porttitor nisl et. Netus libero morbi proin amet tortor.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->