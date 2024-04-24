<?php
/**
 * Title: Banner only
 * Slug: origin/banner-page-template
 * Block Types: core/post-content
 * Post Types: page
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
	<!-- wp:image {"sizeSlug":"full"} -->
	<figure class="wp-block-image size-full"><img src="https://via.placeholder.com/1000x700" alt=""/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->