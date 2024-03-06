<?php
/**
 * Title: Case Study Cards
 * Slug: origin/case-study-cards
 * Categories: theme, travel-desk
 * Block Types: core/group
 *
 * @package origin
 * @since 1.0.0
 */

?>

<!-- wp:group {"templateLock":"contentOnly","className":"is-style-cards fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-cards fade-in">
	<!-- wp:heading {"className":"h4"} -->
	<h2 class="wp-block-heading h4">Our work</h2>
	<!-- /wp:heading -->
	<!-- wp:heading {"level":3,"className":"h2"} -->
	<h3 class="wp-block-heading h2">reaching travelers across the globe</h3>
	<!-- /wp:heading -->
	<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":"3","offset":0,"postType":"case-study","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:post-featured-image /-->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"clients"} /-->
			<!-- wp:post-title {"level":4} /-->
			<!-- wp:post-excerpt {"moreText":"More","excerptLength":10} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->