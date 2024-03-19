<?php
/**
 * Title: Banner with Image
 * Slug: origin/banner-image
 * Categories: theme, banner
 * Block Types: core/group
 *
 * @package origin
 * @since 1.0.0
 */

?>

<!-- wp:group {"className":"is-style-banner-image fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-banner-image fade-in">
	<!-- wp:group {"className":"is-style-banner-image-internal","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-banner-image-internal">
		<!-- wp:paragraph {"className":"h4"} -->
		<p class="h4">Subheading</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Heading</h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:image {"id":243,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="https://via.placeholder.com/1000x700" alt="" class="wp-image-243"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->