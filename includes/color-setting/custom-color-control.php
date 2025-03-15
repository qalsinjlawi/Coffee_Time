<?php

  $cafe_elementor_theme_custom_setting_css = '';

	// Global Color
	$cafe_elementor_theme_color = get_theme_mod('cafe_elementor_theme_color', '#A06F48');

	$cafe_elementor_theme_custom_setting_css .=':root {';
		$cafe_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($cafe_elementor_theme_color ).'!important;';
	$cafe_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$cafe_elementor_scroll_alignment = get_theme_mod('cafe_elementor_scroll_alignment', 'right');

    if($cafe_elementor_scroll_alignment == 'right'){
        $cafe_elementor_theme_custom_setting_css .='.scroll-up{';
            $cafe_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$cafe_elementor_theme_custom_setting_css .='left: auto;!important;';
        $cafe_elementor_theme_custom_setting_css .='}';
    }else if($cafe_elementor_scroll_alignment == 'center'){
        $cafe_elementor_theme_custom_setting_css .='.scroll-up{';
            $cafe_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $cafe_elementor_theme_custom_setting_css .='}';
    }else if($cafe_elementor_scroll_alignment == 'left'){
        $cafe_elementor_theme_custom_setting_css .='.scroll-up{';
            $cafe_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$cafe_elementor_theme_custom_setting_css .='right: auto;!important;';
        $cafe_elementor_theme_custom_setting_css .='}';
    }

    // Related Product

	$cafe_elementor_show_related_product = get_theme_mod('cafe_elementor_show_related_product', true );

	if($cafe_elementor_show_related_product != true){
		$cafe_elementor_theme_custom_setting_css .='.related.products{';
			$cafe_elementor_theme_custom_setting_css .='display: none;';
		$cafe_elementor_theme_custom_setting_css .='}';
	}	