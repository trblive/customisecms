<?php
/**
 * Title: Index
 * Slug: customisecms/index
 * Categories: customisecms_page
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"25px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:25px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}},"border":{"radius":"16px"}}} /-->

    <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

    <!-- wp:post-content {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

    <!-- wp:separator {"className":"is-style-dots"} -->
    <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
    <!-- /wp:separator -->

    <!-- wp:comments -->
    <div class="wp-block-comments"><!-- wp:comments-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->

        <!-- wp:comment-template -->
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
            <div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:comment-author-name {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"fontSize":"small"} /-->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:comment-date {"fontSize":"small"} /-->

                    <!-- wp:comment-edit-link {"style":{"spacing":{"margin":{"left":"var:preset|spacing|20"}}},"fontSize":"small"} /--></div>
                <!-- /wp:group -->

                <!-- wp:comment-content /-->

                <!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
            <!-- /wp:column --></div>
        <!-- /wp:columns -->
        <!-- /wp:comment-template -->

        <!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:comments-pagination-previous /-->

        <!-- wp:comments-pagination-numbers /-->

        <!-- wp:comments-pagination-next /-->
        <!-- /wp:comments-pagination -->

        <!-- wp:post-comments-form /--></div>
    <!-- /wp:comments --></div>
<!-- /wp:group -->