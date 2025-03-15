<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'cafe_elementor_logo_resizer',
        'label'       => __( 'Logo Size', 'cafe-elementor' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'cafe-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'cafe-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'cafe-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'cafe-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'cafe-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'cafe-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'cafe-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'cafe-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/coffee-shop-wordpress-theme', 'cafe-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'cafe-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'cafe_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'cafe-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_theme_color',
		'label'       => __( 'Theme color', 'cafe-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#A06F48',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'cafe_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'cafe-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'cafe_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h1_typography_heading',
		'section'     => 'cafe_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h1_typography_font',
		'section'   =>  'cafe_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'cafe_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h2_typography_heading',
		'section'     => 'cafe_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h2_typography_font',
		'section'   =>  'cafe_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'cafe_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h3_typography_heading',
		'section'     => 'cafe_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h3_typography_font',
		'section'   =>  'cafe_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'cafe_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h4_typography_heading',
		'section'     => 'cafe_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h4_typography_font',
		'section'   =>  'cafe_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'cafe_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h5_typography_heading',
		'section'     => 'cafe_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h5_typography_font',
		'section'   =>  'cafe_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'cafe_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h6_typography_heading',
		'section'     => 'cafe_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h6_typography_font',
		'section'   =>  'cafe_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'cafe_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_body_typography_heading',
		'section'     => 'cafe_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_body_typography_font',
		'section'   =>  'cafe_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'cafe_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'cafe-elementor' ),
	) );

	// HEADER SECTION
		
	Kirki::add_section( 'cafe_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'cafe-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'cafe-elementor' ),
		'panel' => 'cafe_elementor_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'cafe-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'cafe-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'cafe_elementor_menu_size_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_size',
		'tab'      => 'menu',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'cafe-elementor' ),
		'type'        => 'text',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'cafe_elementor_menu_text_transform_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'cafe_elementor_menu_text_transform',
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'cafe-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'cafe-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'cafe-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_color',
		'tab'      => 'menu',
		'label'       => __( 'Menu Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_hover_color',
		'tab'      => 'menu',
		'label'       => __( 'Menu Hover Color', 'cafe-elementor' ),
		'type'        => 'color',
		'default'     => '#A06F48',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_color',
		'tab'      => 'menu',
		'label'       => __( 'Submenu Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'tab'      => 'menu',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'cafe-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#A06F48',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_header_phone_number_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'cafe-elementor' ) . '</h3>',
	] );

	
	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'cafe_elementor_header_phone_number',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'cafe_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_enable_email_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'cafe_elementor_header_email',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_enable_location_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'cafe_elementor_header_location',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_enable_button_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Get Started Button', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Link', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_url',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    => esc_html__( 'Button Text', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_text',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_search_enable',
		'label'       => esc_html__( 'Enable/Disable Search', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_enable_socail_link',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'tab'      => 'header',
		'section'     => 'cafe_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'cafe-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'cafe-elementor' ),
		'settings'     => 'cafe_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cafe-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'cafe-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'cafe-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'cafe_elementor_logo_settings_premium_features_header',
		'section'     => 'cafe_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'cafe-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'cafe-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'cafe-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/coffee-shop-wordpress-theme', 'cafe-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'cafe-elementor' ) .'</a></div>',
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'cafe_elementor_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'cafe-elementor' ),
		'panel' => 'cafe_elementor_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'cafe-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'cafe-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
		'tab'      => 'general',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_scroll_alignment_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_scroll_alignment',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'cafe-elementor' ),
			'center' => esc_html__( 'center', 'cafe-elementor' ),
			'right' => esc_html__( 'right', 'cafe-elementor' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_scroller_border_radius_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_scroller_border_radius',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_cursor_outline_heading',
		'section'     => 'cafe_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_progress_bar_heading',
		'section'     => 'cafe_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_single_page_layout_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'cafe_elementor_single_page_layout',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'cafe-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'cafe-elementor' ),
			'One Column' => esc_html__( 'One Column', 'cafe-elementor' ),
		],
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_background_attachment_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_background_attachment',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'cafe-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_image_height_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_header_image_height',
		'label'       => __( 'Image Height', 'cafe-elementor' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'cafe-elementor' ),
		'type'        => 'text',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'tab'      => 'header-image',
		'section'     => 'cafe_elementor_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_overlay_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'cafe-elementor' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'cafe_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000066',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'cafe_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'cafe_elementor_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'cafe-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'cafe-elementor' ),
		'panel' => 'cafe_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'cafe-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'cafe-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_post_layout_heading',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_post_layout',
		'tab'      => 'blog-post',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'cafe-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'cafe-elementor' ),
			'One Column' => esc_html__( 'One Column', 'cafe-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'cafe-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'cafe-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      	  => 'blog-post',
		'settings'    => 'cafe_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      	  => 'blog-post',
		'settings'    => 'cafe_elementor_length_setting_heading',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      	  => 'blog-post',
		'settings'    => 'cafe_elementor_length_setting',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
						'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_show_pagination_heading',
		'section'     => 'cafe_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'cafe_elementor_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_single_post_tag',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_single_post_category',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'cafe_elementor_single_post_radius',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'cafe-elementor' ),
		'type'        => 'text',
		'tab'      	  => 'single-post',
		'section'     => 'cafe_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );
	
	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'cafe_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'cafe-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'cafe-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_shop_page_layout',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'cafe-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'cafe-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'cafe_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_products_per_row',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_products_per_page',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_single_product_sidebar_layout',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'cafe-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'cafe-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'cafe_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_products_button_border_radius_heading',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_elementor_products_button_border_radius',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_sale_badge_position_heading',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_sale_badge_position',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'cafe-elementor' ),
			'left' => esc_html__( 'Left', 'cafe-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_products_sale_font_size_heading',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'cafe_elementor_products_sale_font_size',
		'section'     => 'cafe_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_show_related_product_heading',
		'section'     => 'cafe_elementor_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	// No Results Page Settings

	Kirki::add_section( 'cafe_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_page_not_found_title_heading',
		'section'     => 'cafe_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_page_not_found_title',
		'section'  => 'cafe_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'cafe-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_page_not_found_text_heading',
		'section'     => 'cafe_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_page_not_found_text',
		'section'  => 'cafe_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'cafe-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'cafe_elementor_page_not_found_line_break',
		'section'  => 'cafe_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_no_results_title_heading',
		'section'     => 'cafe_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_no_results_title',
		'section'  => 'cafe_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'cafe-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_no_results_content_heading',
		'section'     => 'cafe_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_no_results_content',
		'section'  => 'cafe_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cafe-elementor'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'cafe_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'cafe-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'cafe-elementor' ),
        'panel'    => 'cafe_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_show_footer_widget_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_text_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_footer_text',
		'section'  => 'cafe_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_enable_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_background_widget_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'cafe_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'cafe_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_widget_alignment_heading',
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_footer_widget_alignment',
		'section'     => 'cafe_elementor_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'cafe-elementor' ),
			'right' => esc_html__( 'right', 'cafe-elementor' ),
			'left' => esc_html__( 'left', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_copright_color_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_copright_text_color_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_logo_settings_premium_features_footer',
		'section'     => 'cafe_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'cafe-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'cafe-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'cafe-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'cafe-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/coffee-shop-wordpress-theme', 'cafe-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'cafe-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'cafe_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_social_icon_hide_heading',
		'section'     => 'cafe_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'cafe_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'cafe-elementor' ),
			'right' => esc_html__( 'right', 'cafe-elementor' ),
			'left' => esc_html__( 'left', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'cafe_elementor_enable_footer_socail_link',
		'section'     => 'cafe_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'cafe_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'cafe-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'cafe-elementor' ),
		'settings'     => 'cafe_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cafe-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'cafe-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'cafe-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

}