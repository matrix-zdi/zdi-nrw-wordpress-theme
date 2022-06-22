<?php get_header(); ?>
<?php the_post(); ?>

	<main id="main" class="content-container" role="main" tabindex="-1">
		
		<div class="page-title">
			<?php the_breadcrumb_navigation(); ?>
			<h1 class="is-style-pill-shape"><?php the_flexible_title(); ?></h1>
			<?php if( is_singular( 'post' ) ) { ?>
			<div class="single-post-meta">
				<p>Veröffentlicht am <?php the_date(); ?> unter <?php echo get_the_category_list( ', ' ); ?></p>
				<?php if( ! empty( get_the_tag_list() ) ) { ?>
				<p>Schlagwörter: <?php the_tags( '', ', ', '' ); ?></p>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		
		<?php the_content(); ?>
		
	</main>

<?php get_footer(); ?>