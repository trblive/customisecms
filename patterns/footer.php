<?php
/**
 * Title: footer
 * Slug: customise-cms/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|70","bottom":"0","left":"0px"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:0;padding-left:0px"><!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"width":"4px","color":"#ffffff","radius":"16px"}}} -->
<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/marie-sniff-150x150.jpg" alt="" class="has-border-color" style="border-color:#ffffff;border-width:4px;border-radius:16px;aspect-ratio:1/1;object-fit:cover;width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-left" style="font-size:0.9rem;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase">Search</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"style":{"border":{"radius":"25px","width":"1px"},"typography":{"letterSpacing":"0.05px","fontStyle":"normal","fontWeight":"400"}},"borderColor":"contrast-three"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":[]},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-left" style="font-size:0.9rem;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase">Social</p>
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

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400">✨ Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->