<?php

/**
 * Title: Testimonial
 * Slug: xperio/testimonial
 * Categories: xperio-testimonial
 */
$xperio_url    = trailingslashit( get_template_directory_uri() );
$xperio_images = array(
	$xperio_url . 'assets/images/testimonial-1.png',
	$xperio_url . 'assets/images/testimonial-2.png',
	$xperio_url . 'assets/images/testimonial-3.png',
	$xperio_url . 'assets/images/testimonial-4.png',
	$xperio_url . 'assets/images/stars.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:26px;padding-bottom:80px;padding-left:26px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<p class="has-text-align-center has-heading-color-color has-text-color has-link-color">
<?php
	esc_html_e( 'Testimonials', 'xperio' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"24px"}}},"textColor":"heading-color","fontSize":"giga"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-giga-font-size" style="margin-top:24px">
<?php
	esc_html_e( 'Brand Confidence Fueled by Data-Driven Results', 'xperio' );
?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"65px"}}}} -->
<div class="wp-block-columns" style="margin-top:65px"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="
<?php
	echo esc_url( $xperio_images[0] );
?>
" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3">
<?php
	esc_html_e( 'John Doe', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="
<?php
	echo esc_url( $xperio_images[4] );
?>
" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="
<?php
	echo esc_url( $xperio_images[3] );
?>
" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3">
<?php
	esc_html_e( 'John Doe', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="
<?php
	echo esc_url( $xperio_images[4] );
?>
" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores suscipit soluta veniam totam, odio ipsam dolores architecto unde ea quo commodi a vel', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="
<?php
	echo esc_url( $xperio_images[1] );
?>
" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3"><?php esc_html_e( 'Jane Doe', 'xperio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="
<?php
	echo esc_url( $xperio_images[4] );
?>
" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores suscipit soluta veniam totam, odio ipsam dolores architecto unde ea quo commodi a vel', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( $xperio_images[2] ); ?>" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3">
<?php
	esc_html_e( 'Jane Doe', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="<?php echo esc_url( $xperio_images[4] ); ?>" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'xperio' );

?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( $xperio_images[3] ); ?>" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3">
<?php
	esc_html_e( 'John Doe', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="
<?php
	echo esc_url( $xperio_images[4] );
?>
" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-xperio-boxshadow","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"345px"}} -->
<div class="wp-block-group is-style-xperio-boxshadow has-background-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"12px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"id":7708,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="
<?php
echo esc_url( $xperio_images[0] );
?>
" alt="" class="wp-image-7708" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"153px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"color":{"text":"#121205"},"elements":{"link":{"color":{"text":"#121205"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#121205;font-size:24px;font-style:normal;font-weight:400;line-height:1.3">
<?php
	esc_html_e( 'John Doe', 'xperio' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#3e3f3c"},"elements":{"link":{"color":{"text":"#3e3f3c"}}}}} -->
<p class="has-text-color has-link-color" style="color:#3e3f3c">
<?php
	esc_html_e( 'UI Designer', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"id":7723,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"32px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:32px"><img src="
<?php
	echo esc_url( $xperio_images[4] );
?>
" alt="" class="wp-image-7723"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
<p style="margin-top:24px">
<?php
	esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores suscipit soluta veniam totam, odio ipsam dolores architecto unde ea quo commodi a vel', 'xperio' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"65px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:65px"><!-- wp:button {"backgroundColor":"black-color","textColor":"background","className":"is-style-xperio-button-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"color":"#3e3f3c87","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-button is-style-xperio-button-arrow"><a class="wp-block-button__link has-background-color has-black-color-background-color has-text-color has-background has-link-color has-border-color wp-element-button" style="border-color:#3e3f3c87;border-width:1px;border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;font-style:normal;font-weight:500">
<?php
	esc_html_e( 'Read All Reviews', 'xperio' );
?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->