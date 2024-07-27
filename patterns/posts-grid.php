<?php
/**
 * Title: Posts Grid
 * Slug: customisecms/posts-grid
 * Categories: posts
 * Viewport width: 1400
 */
?>

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"16px"},"dimensions":{"minHeight":"100%"},"color":{"background":"#ffffffcc"}},"className":"post-card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
    <article class="wp-block-group post-card has-background" style="border-radius:16px;background-color:#ffffffcc;min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"post-meta","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
            <div class="wp-block-group post-meta has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"author"} /-->

                <!-- wp:post-date {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"date"} /-->

                <!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"category"} /-->

                <!-- wp:post-comments-count {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"0","left":"0"}}},"className":"comments"} /--></div>
            <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:read-more {"content":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"contrast"} /--></article>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p>No posts found.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results --></div>
<!-- /wp:query -->
