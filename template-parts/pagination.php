<?php if(get_theme_mod('cafe_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'cafe-elementor' ),
			'next_text' => esc_html__( 'Next page', 'cafe-elementor' ),
		) );
	?>		
<?php endif; ?>