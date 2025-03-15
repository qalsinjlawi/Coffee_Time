<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function cafe_elementor_setup_widgets(){

	$cafe_elementor_product_image_gallery = array();
	$cafe_elementor_product_ids = array();

	$cafe_elementor_product_category= array(
		'All'       => array(
			'AMERICAN COFFEE',
			'CAFFE LATTE',
			'COFFEE MOCHA',
		),
		'Chocolate'       => array(
			'CAFFE LATTE',
			'COFFEE MOCHA',
			'AMERICAN COFFEE',
		),
		'Coffee'       => array(
			'COFFEE MOCHA',
			'AMERICAN COFFEE',
			'CAFFE LATTE',
		),
		'Sweets'       => array(
			'CAFFE LATTE',
			'AMERICAN COFFEE',
			'COFFEE MOCHA',
		),
		'Black Tea'       => array(
			'AMERICAN COFFEE',
			'COFFEE MOCHA',
			'CAFFE LATTE',
		),
		'Green Tea'       => array(
			'COFFEE MOCHA',
			'CAFFE LATTE',
			'AMERICAN COFFEE',
		),
	);

	$cafe_elementor_k = 1;
	foreach ( $cafe_elementor_product_category as $cafe_elementor_product_cats => $cafe_elementor_products_name ) { 
	// Insert porduct cats Start
	$content = 'This is sample product category';
	$cafe_elementor_parent_category	=	wp_insert_term(
	$cafe_elementor_product_cats, // the term
	'product_cat', // the taxonomy
		array(
		'description'=> $content,
		'slug' => str_replace( ' ', '-', $cafe_elementor_product_cats)
		)
	);

// -------------- create subcategory END -----------------

	$cafe_elementor_n=1;
	// create Product START
	foreach ( $cafe_elementor_products_name as $key => $cafe_elementor_product_title ) {
	$content = '
		<div class="main_content">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>';

	// Create post object
	$cafe_elementor_my_post = array(
		'post_title'    => wp_strip_all_tags( $cafe_elementor_product_title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'product',
		'post_category' => [$cafe_elementor_parent_category['term_id']]
	);

	// Insert the post into the database

	$cafe_elementor_uqpost_id = wp_insert_post($cafe_elementor_my_post);
	wp_set_object_terms( $cafe_elementor_uqpost_id, str_replace( ' ', '-', $cafe_elementor_product_cats), 'product_cat', true );

	$cafe_elementor_product_price = array('35.89','35.89','35.89','35.89');
	$cafe_elementor_product_regular_price = array('68.99','68.99','68.99','68.99');
	$cafe_elementor_product_sale_price = array('35.89','35.89','35.89','35.89');
	
	update_post_meta( $cafe_elementor_uqpost_id, '_regular_price', $cafe_elementor_product_regular_price[$cafe_elementor_n-1] );
	update_post_meta( $cafe_elementor_uqpost_id, '_price', $cafe_elementor_product_price[$cafe_elementor_n-1] );
	update_post_meta( $cafe_elementor_uqpost_id, '_sale_price', $cafe_elementor_product_sale_price[$cafe_elementor_n-1] );
	array_push( $cafe_elementor_product_ids,  $cafe_elementor_uqpost_id );

	// Now replace meta w/ new updated value array
	$cafe_elementor_image_url = get_template_directory_uri().'/assets/images/product/'.$cafe_elementor_product_cats.'/' . str_replace(' ', '_', strtolower($cafe_elementor_product_title)).'.png';
	$cafe_elementor_image_name  = $cafe_elementor_product_title.'.png';
	$cafe_elementor_upload_dir = wp_upload_dir();
	// Set upload folder
	$cafe_elementor_image_data = file_get_contents(esc_url($cafe_elementor_image_url));
	// Get image data
	$unique_file_name = wp_unique_filename($cafe_elementor_upload_dir['path'], $cafe_elementor_image_name);
	// Generate unique name
	$cafe_elementor_filename = basename($unique_file_name);
	// Create image file name
	// Check folder permission and define file location
	if (wp_mkdir_p($cafe_elementor_upload_dir['path'])) {
	$cafe_elementor_file = $cafe_elementor_upload_dir['path'].'/'.$cafe_elementor_filename;
	} else {
	$cafe_elementor_file = $cafe_elementor_upload_dir['basedir'].'/'.$cafe_elementor_filename;
	}
	
	file_put_contents($cafe_elementor_file, $cafe_elementor_image_data);
	// Check image file type
	$wp_filetype = wp_check_filetype($cafe_elementor_filename, null);
	// Set attachment data
	$attachment = array(
	'post_mime_type' => $wp_filetype['type'],
	'post_title'     => sanitize_file_name($cafe_elementor_filename),
	'post_type'      => 'product',
	'post_status'    => 'inherit',
	);

	// Create the attachment
	$cafe_elementor_attach_id = wp_insert_attachment($attachment, $cafe_elementor_file, $cafe_elementor_uqpost_id);

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata($cafe_elementor_attach_id, $cafe_elementor_file);

	// Assign metadata to attachment
	wp_update_attachment_metadata($cafe_elementor_attach_id, $attach_data);
	if ( count( $cafe_elementor_product_image_gallery ) < 3 ) {
		array_push( $cafe_elementor_product_image_gallery, $cafe_elementor_attach_id );
	}
	// // And finally assign featured image to post
	set_post_thumbnail($cafe_elementor_uqpost_id, $cafe_elementor_attach_id);
	++$cafe_elementor_n;
	}
	// Create product END
	++$cafe_elementor_k;
	}
	// Add Gallery in first simple product and second variable product START
	$cafe_elementor_product_image_gallery = implode( ',', $cafe_elementor_product_image_gallery );
	foreach ( $cafe_elementor_product_ids as $cafe_elementor_product_id ) {
	update_post_meta( $cafe_elementor_product_id, 'cafe_elementor_product_image_gallery', $cafe_elementor_product_image_gallery );
	}
}

}
 