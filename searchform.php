<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<label class="screen-reader-text">Suche nach:</label>
	<input type="search" class="search-field" placeholder="Suchbegriff ..." value="<?php echo get_search_query(); ?>" name="s" title="Suche nach:" />
	<button type="submit" class="search-submit">Suchen</button>
</form>