<?php
	/**
	* Title: Hero
	* Slug: zdinrw/hero
	* Categories: zdinrw
	*/
?>
<!-- wp:cover {"url":"<?php echo get_template_directory_uri(); ?>/patterns/img/placeholder.jpg","dimRatio":60,"focalPoint":{"x":"0.50","y":"0.15"},"minHeight":65,"minHeightUnit":"rem","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:65rem">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo get_template_directory_uri(); ?>/patterns/img/placeholder.jpg" style="object-position:50% 15%" data-object-fit="cover" data-object-position="50% 15%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="has-text-align-center">Lorem ipsum dolor sit amet</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nulla tortor, luctus ut tellus dictum, ultricies euismod purus. Donec tincidunt sem at rhoncus vestibulum. Integer consequat mi sem, sed fringilla lacus posuere sit amet.</p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"2rem"} -->
		<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">Projekte entdecken</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">Mehr erfahren</a></div>
			<!-- /wp:button -->
			</div>
		<!-- /wp:buttons -->
		<!-- wp:spacer {"height":"3rem"} -->
		<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
</div>
<!-- /wp:cover -->