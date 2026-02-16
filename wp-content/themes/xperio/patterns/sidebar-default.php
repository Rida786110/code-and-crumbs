<?php
	/**
	 * Title: Sidebar Default
	 * Slug: xperio/sidebar-default
	 * Categories: xperio
	 */
	$xperio_url = trailingslashit( get_template_directory_uri() );
$xperio_images  = array(
	$xperio_url . 'assets/images/testimonial-1.png',
);
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#E0E0E0","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color" style="border-color:#E0E0E0;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":7708,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="
<?php
	echo esc_url( $xperio_images[0] );
?>
" alt="" class="wp-image-7708" style="object-fit:cover;width:70px;height:70px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"24px"}}},"fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:24px;font-style:normal;font-weight:500;line-height:1.3">Eric Ballard</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px"}}}} -->
<p class="has-text-align-center" style="margin-top:16px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores suscipit soluta veniam totam, odio ipsam dolores architecto unde ea quo commodi a temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.', 'xperio' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#3E3F3C","className":"is-style-xperio-no-radius","style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-xperio-no-radius" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"36px","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#E0E0E0","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color" style="border-color:#E0E0E0;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:36px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}},"fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;font-style:normal;font-weight:500;line-height:1.3">
<?php
	esc_html_e( 'Latest Blogs', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0px","bottom":"12px"},"margin":{"top":"0","bottom":"12px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:12px;padding-top:0px;padding-bottom:12px"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"black-color","fontSize":"small"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"x-x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"36px","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#E0E0E0","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color" style="border-color:#E0E0E0;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:36px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}},"fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;font-style:normal;font-weight:500;line-height:1.3">
<?php
	esc_html_e( 'Latest Blogs', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:categories {"className":"is-style-xperio-categories-no-list","style":{"spacing":{"padding":{"right":"0","left":"0","top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|black-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"black-color","fontSize":"normal"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->