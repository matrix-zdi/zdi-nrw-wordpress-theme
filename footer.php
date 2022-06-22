		<?php if( is_active_sidebar( 'footer' ) ) { ?>
		<footer id="footer">
			<div id="footer__widgets">
				<div class="content-container">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			</div>
		</footer>
		<?php } ?>
		<?php wp_footer(); ?>
	</body>
</html>