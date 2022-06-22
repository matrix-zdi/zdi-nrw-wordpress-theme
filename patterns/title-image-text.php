<?php
	/**
	* Title: Titel mit Bild und Text
	* Slug: zdinrw/title-image-text
	* Categories: zdinrw
	*/
?>
<!-- wp:heading {"textColor":"dark-blue","className":"is-style-underline"} -->
<h2 class="is-style-underline has-dark-blue-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"id":1,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo get_template_directory_uri(); ?>/patterns/img/placeholder.jpg" alt="" class="wp-image-1" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph -->
		<p>Vestibulum tincidunt lectus nec ipsum blandit eleifend. Aliquam consequat efficitur justo ac venenatis. Aliquam lectus est, interdum sit amet sodales vel, dignissim vitae dui. Pellentesque ultrices lectus accumsan leo sodales posuere. Morbi dictum ut mauris nec condimentum. Integer imperdiet luctus est non viverra.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">Mehr erfahren</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->