<?php
/**
 * Title: Banner, Text & Gallery
 * Slug: origin/banner-text-gallery-page-template
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
<!-- wp:group {"className":"is-style-single-column-copy fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-single-column-copy fade-in">
	<!-- wp:heading -->
	<h2 class="wp-block-heading">Heading</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Bro ipsum dolor sit amet bunny slope ride death cookies endo, roadie bail chillax hero shred dope travel presta. Grip tape Bike bear trap skid lid presta washboard giblets bonk. Sucker hole brain bucket fatty ACL sucker hole dope face plant. Chain ring park heli skid lid line bail. Epic shuttle ollie carve grunt, air yard sale Snowboard cornice pow pow bail beater Whistler switch.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"templateLock":"contentOnly","className":"is-style-gallery is-full-width-container fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-gallery is-full-width-container fade-in">
	<!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="http://placehold.it/900x1000" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"width":"318px","sizeSlug":"medium"} -->
			<figure class="wp-block-image size-medium is-resized"><img src="http://placehold.it/350x350" alt="" style="width:318px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Heading <sub>Highlight</sub></h2>
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
		<p>Frozen chicken heads air grip tape McTwist, ripper core shot bowl wheelie drop big ring.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Link</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->