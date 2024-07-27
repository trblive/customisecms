<?php
/**
 * Title: front-page
 * Slug: customise-cms/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:aura/aura /-->

<!-- wp:star-border/star-border /-->

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--70)"><?php echo __('Customise CMS', 'customise-cms');?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"border":{"radius":"16px"},"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base"} -->
<div class="wp-block-columns has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"base-two","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-two-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<p class="has-text-align-center" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php echo __('featured', 'customise-cms');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":27,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list"} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"post-meta","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
<div class="wp-block-group post-meta has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"author"} /-->

<!-- wp:post-date {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"date"} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"category"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"<?php echo __('tags', 'customise-cms');?>"} /-->

<!-- wp:post-comments-count {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"0","left":"0"}}},"className":"comments"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:read-more {"content":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"contrast"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"40px","height":"40px","scale":"contain","sizeSlug":"thumbnail","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heart-holo-150x138.png" alt="" style="object-fit:contain;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"32px"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/flower-pearl.png" alt="" style="object-fit:contain;width:32px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/star-holo.png" alt="" style="object-fit:contain;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"8px"}},"backgroundColor":"base-two","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-two-background-color has-background" style="border-radius:8px"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<p class="has-text-align-center" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php echo __('quick links', 'customise-cms');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo __('categories', 'customise-cms');?></p>
<!-- /wp:paragraph -->

<!-- wp:<?php echo __('categories', 'customise-cms');?> {"showPostCounts":true,"className":"list-style-none text-underline text-grey","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)"><?php echo __('tags', 'customise-cms');?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"smallestFontSize":"14pt","largestFontSize":"14pt","className":"text-underline is-style-default text-grey","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"300px"} -->
<div class="wp-block-column" style="flex-basis:300px"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:calendar {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-two"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"contrast"} /-->

<!-- wp:html -->
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/1mg7ERNdqH7zAN234gnZwS?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo __('latest posts', 'customise-cms');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":27,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list","metadata":{"<?php echo __('categories', 'customise-cms');?>":["posts"],"patternName":"customisecms/posts-grid","name":"Posts Grid"}} -->
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
<p><?php echo __('No posts found.', 'customise-cms');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|70","bottom":"0","left":"0px"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:0;padding-left:0px"><!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"width":"4px","color":"#ffffff","radius":"16px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/marie-sniff-150x150.jpg" alt="" class="has-border-color" style="border-color:#ffffff;border-width:4px;border-radius:16px;aspect-ratio:1;object-fit:cover;width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-left" style="font-size:0.9rem;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo __('Search', 'customise-cms');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo __('Search', 'customise-cms');?>","showLabel":false,"placeholder":"what are you looking for?","width":75,"widthUnit":"%","buttonText":"<?php echo __('Search', 'customise-cms');?>","buttonUseIcon":true,"style":{"border":{"radius":"25px","width":"1px"},"typography":{"letterSpacing":"0.05px","fontStyle":"normal","fontWeight":"400"}},"borderColor":"contrast-three","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":[]},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-left" style="font-size:0.9rem;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php echo __('Social', 'customise-cms');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://au.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://open.spotify.com/","service":"spotify"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400"><?php echo __('✨ Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'customise-cms');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->