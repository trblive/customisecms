<?php
/**
 * Title: Single Post Card
 * Slug: customisecms/single-post-card
 * Categories: posts
 * Viewport width: 1400
 */
?>

<!-- wp:query {"queryId":27,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
	<!-- wp:post-title {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":122,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="http://localhost/wordpress/wp-content/uploads/2024/05/profile.svg" alt="" class="wp-image-122"/></figure>
			<!-- /wp:image -->

			<!-- wp:post-author-name {"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":123,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="http://localhost/wordpress/wp-content/uploads/2024/05/calendar.svg" alt="" class="wp-image-123"/></figure>
			<!-- /wp:image -->

			<!-- wp:post-date {"isLink":true,"displayType":"modified","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":124,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="http://localhost/wordpress/wp-content/uploads/2024/05/category.svg" alt="" class="wp-image-124"/></figure>
			<!-- /wp:image -->

			<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":125,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="http://localhost/wordpress/wp-content/uploads/2024/05/messages-2.svg" alt="" class="wp-image-125"/></figure>
			<!-- /wp:image -->

			<!-- wp:post-comments-count {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"right":"0","left":"0"}}}} /--></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Read more</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
<!-- /wp:query -->