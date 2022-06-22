<?php get_header(); ?>

	<main id="main" class="content-container" role="main" tabindex="-1">
		
		<div class="page-title">
			<?php the_breadcrumb_navigation(); ?>
			<h1 class="is-style-pill-shape"><?php echo get_flexible_title(); ?></h1>
		</div>
		
		<?php if( have_posts() ) { ?>
		
		<div class="blog__grid alignwide">
		
		<?php while( have_posts() ) { ?>
		
		<?php the_post(); ?>
		
		<article class="blog__single-post">
			
			<?php if( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail( 'large', array( 'class' => 'blog__single-post__thumbnail' ) ); ?>
			<?php } ?>
			<a class="blog__single-post__title-link" href="<?php the_permalink(); ?>">
				<h2 class="blog__single-post__title"><?php the_title(); ?></h2>
			</a>
			<p class="blog__single-post__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, ' ...' ); ?></p>
			<div class="blog__single-post__read-more wp-block-buttons">
				<div class="wp-block-button"><a class="wp-block-button__link" href="<?php the_permalink(); ?>">Weiterlesen</a></div>
			</div>
			
		</article>
		
		<?php } ?>
		
		</div>
		
		<div class="post-pagination">
			<?php the_posts_pagination( array(
				'prev_text' => '&larr; Neuere',
				'next_text' => 'Ältere &rarr;',
			) ); ?>
		</div>
		
		<?php } else { ?>
		
		<p>Es wurden noch keine Inhalte angelegt.</p>
		
		<?php } ?>
		
	</main>

<?php get_footer(); ?>