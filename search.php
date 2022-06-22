<?php get_header(); ?>

	<main id="main" class="content-container" role="main" tabindex="-1">
		
		<div class="page-title">
			<?php the_breadcrumb_navigation(); ?>
			<h1 class="is-style-pill-shape"><?php the_flexible_title(); ?></h1>
		</div>

		<div id="main__search-form">
			<?php get_search_form(); ?>
		</div>
		
		<?php if( ! empty( get_search_query() ) && ! have_posts() ) { ?>
		<p>Zu diesem Suchbegriff konnten keine Inhalte gefunden werden.</p>
		<?php } ?>
		
		<?php if( ! empty( get_search_query() ) && have_posts() ) { ?>
		
		<?php while( have_posts() ) { ?>
		
		<?php the_post(); ?>
		
		<article class="search__single-result">
			<a class="search__single-result__link" href="<?php the_permalink(); ?>">
				<div class="search__single-result__permalink"><?php the_permalink(); ?></div>
				<h2 class="search__single-result__title"><?php the_title(); ?></h2>
			</a>
			<p class="search__single-result__excerpt"><?php if( 'post' == get_post_type( get_the_id() ) ) { ?><span class="search__single-result__meta"><?php echo get_the_date(); ?></span> &mdash; <?php } ?><?php echo wp_trim_words( get_the_excerpt(), 30, ' ...' ); ?></p>
		</article>
		
		<?php } ?>
		
		<div class="post-pagination">
			<?php the_posts_pagination( array(
				'prev_text' => '&larr; Vorherige',
				'next_text' => 'Weitere &rarr;',
			) ); ?>
		</div>
		
		<?php } ?>
		
	</main>

<?php get_footer(); ?>