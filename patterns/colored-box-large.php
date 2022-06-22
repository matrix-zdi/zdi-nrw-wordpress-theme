<?php
	/**
	* Title: Farbige Box (groß)
	* Slug: zdinrw/colored-box-large
	* Categories: zdinrw
	*/
?>
<!-- wp:group {"align":"wide","backgroundColor":"dark-blue","textColor":"pale-grey","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide has-pale-grey-color has-dark-blue-background-color has-text-color has-background">
	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"textColor":"orange","className":"is-style-default"} -->
			<h2 class="is-style-default has-orange-color has-text-color">Lorem ipsum dolor sit amet consectetur</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nulla tortor, luctus ut tellus dictum, ultricies euismod purus. Donec tincidunt sem at rhoncus vestibulum. Integer consequat mi sem, sed fringilla lacus posuere sit amet.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link">Jetzt anmelden</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"pale-grey","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-pale-grey-color has-text-color">Mehr erfahren</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"align":"center","id":1,"width":361,"height":240,"sizeSlug":"large","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo get_template_directory_uri(); ?>/patterns/img/placeholder.jpg" alt="" class="wp-image-1" width="361" height="240" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->