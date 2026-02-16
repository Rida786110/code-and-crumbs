<?php

/**
 * Title: Header Default
 * Slug: xperio/header-default
 * Description: Default header layout for the xperio
 * Categories: xperio-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"text":"#fffffe","background":"#010101"},"elements":{"link":{"color":{"text":"#fffffe"},":hover":{"color":{"text":"#f8fc26"}}}},"spacing":{"blockGap":"0","padding":{"top":"16px","bottom":"16px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-text-color has-background has-link-color" style="color:#fffffe;background-color:#010101;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:26px;padding-bottom:16px;padding-left:26px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"400","textTransform":"lowercase"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"is-style-xperio-navigation-primary","fontSize":"normal"} -->
<!-- wp:home-link /-->

<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-xperio-button-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"width":"1px"}},"borderColor":"background"} -->
<div class="wp-block-button is-style-xperio-button-arrow"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-background-border-color wp-element-button" style="border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px">
<?php
	esc_html_e( 'Contact Us', 'xperio' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
