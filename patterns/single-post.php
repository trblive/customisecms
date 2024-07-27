<?php
/**
 * Title: Single Post
 * Slug: customisecms/single-post
 * Categories: posts
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":27,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
        <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group post-meta" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"author"} /-->

            <!-- wp:post-date {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"date"} /-->

            <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"category"} /-->

            <!-- wp:post-comments-count {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"0","left":"0"}}},"className":"comments"} /--></div>
        <!-- /wp:group -->

        <!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

        <!-- wp:read-more {"content":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results --></div>
    <!-- /wp:query --></div>
<!-- /wp:group -->