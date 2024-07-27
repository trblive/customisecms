<?php
/**
 * Title: Posts List
 * Slug: customisecms/posts
 * Categories: posts
 * Viewport width: 1400
 */
?>

<!-- wp:query {"queryId":79,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"16px"}},"backgroundColor":"base","className":"post-card","layout":{"inherit":false}} -->
	<div class="wp-block-group post-card has-base-background-color has-background" style="border-radius:16px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"post-meta","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
		<div class="wp-block-group post-meta has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"author"} /-->

			<!-- wp:post-date {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"date"} /-->

			<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"category"} /-->

			<!-- wp:post-comments-count {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"0","left":"0"}}},"className":"comments"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

		<!-- wp:post-excerpt {"style":{"typography":{"lineHeight":"1.5"}}} /-->

		<!-- wp:read-more {"content":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"contrast"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
<!-- /wp:query -->
