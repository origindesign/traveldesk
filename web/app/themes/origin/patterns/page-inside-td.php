<?php
/**
 * Title: Inside TD page template
 * Slug: origin/inside-td-page-template
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
	<h2 class="wp-block-heading">heading 2 single column copy lorem ipsum</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Body copy lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
<!-- wp:group {"templateLock":"contentOnly","className":"is-style-hero-cover fade-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-hero-cover fade-in">
	<!-- wp:quote -->
	<blockquote class="wp-block-quote">
		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor, <strong>sit amet, consectetur</strong></p>
		<!-- /wp:paragraph --><cite>CITATION</cite>
	</blockquote>
	<!-- /wp:quote -->
</div>
<!-- /wp:group -->
<!-- wp:columns {"templateLock":"contentOnly","className":"is-style-team-cards fade-in"} -->
<div class="wp-block-columns is-style-team-cards fade-in">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"templateLock":"contentOnly","className":"is-style-team-cards fade-in"} -->
<div class="wp-block-columns is-style-team-cards fade-in">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"templateLock":"contentOnly","className":"is-style-team-cards fade-in"} -->
<div class="wp-block-columns is-style-team-cards fade-in">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"templateLock":"contentOnly","className":"is-style-team-cards fade-in"} -->
<div class="wp-block-columns is-style-team-cards fade-in">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"className":"team-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group team-card">
			<!-- wp:image -->
			<figure class="wp-block-image"><img src="https://via.placeholder.com/450x350" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Name</h4>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":5,"className":"h6"} -->
			<h5 class="wp-block-heading h6">Title</h5>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Job description</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->