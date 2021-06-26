<?php

// Register Custom Post Type @articles
function articles_post_type() {

	$labels = array(
		'name'                  => _x( 'Articles', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Articles', 'text_domain' ),
		'name_admin_bar'        => __( 'Article', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'textos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Article', 'text_domain' ),
		'description'           => __( 'Site articles.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields','excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'menu_icon' 			=> 'dashicons-media-document',
		'show_in_rest'          => true
	);
	register_post_type( 'articles', $args );

}
add_action( 'init', 'articles_post_type', 0 );


// Register Custom Post Type @portfolio
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Jobs & Ideas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Job or Idea', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Jobs & Ideas', 'text_domain' ),
		'name_admin_bar'        => __( 'Jobs & Ideas', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Jobs & Ideas', 'text_domain' ),
		'description'           => __( 'Jobs & Ideas.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'menu_icon' 			=> 'dashicons-pressthis',
		'show_in_rest'          => true
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );

// Register Custom Post Type @sliders
function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sliders', 'text_domain' ),
		'name_admin_bar'        => __( 'Sliders', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'slider',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Sliders', 'text_domain' ),
		'description'           => __( 'Sliders.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'menu_icon' 			=> 'dashicons-images-alt',
		'show_in_rest'          => true
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );


//////////////////////////////////////////////////
// Função para modificar o título do custom post//
//////////////////////////////////////////////////
function change_title_text( $title ){
  $screen = get_current_screen();
  if ( 'articles' == $screen->post_type ) {
    $title = 'Título do texto';
  }
  return $title;
}

add_filter( 'enter_title_here', 'change_title_text' );

//////////////////////////////////////////////////////////
//  Função para  registrar META-BOXES no WP e REST API  //
//////////////////////////////////////////////////////////

//////////////////////////////
/* metaBoxGroup - general */
//////////////////////////////
add_filter( 'rwmb_meta_boxes', 'metaBoxGroup' );

function metaBoxGroup( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Extras', 'my-custom-metabox' ),
        'id'         => 'wp-rs-general',
        'post_types' => ['post', 'page', 'articles'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'color',
                'name' => esc_html__( 'Font Color', 'my-custom-metabox' ),
                'id'   => $prefix . 'font_color',
				'std'  => '#303030',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'BG Color', 'my-custom-metabox' ),
                'id'   => $prefix . 'bg_color',
				'std'  => '#ffffff',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Highlight', 'my-custom-metabox' ),
                'id'   => $prefix . 'highlight_images',
				
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'BG Images', 'my-custom-metabox' ),
                'id'   => $prefix . 'bg_imges',
            ],
        ],
    ];

    return $meta_boxes;
}
//////////////////////////////
/* end metaBoxGroup - general */
//////////////////////////////

//////////////////////////////
/* metaBoxGroup - portfolio */
//////////////////////////////
add_filter( 'rwmb_meta_boxes', 'metaBoxGroupPortfolio' );

function metaBoxGroupPortfolio( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Extras', 'my-portfolio-metabox' ),
        'id'         => 'wp-rs-portfolio',
        'post_types' => ['portfolio'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'color',
                'name' => esc_html__( 'Font Color', 'my-portfolio-metabox' ),
                'id'   => $prefix . 'font_color',
				'std'  => '#303030',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'BG Color', 'my-portfolio-metabox' ),
                'id'   => $prefix . 'bg_color',
				'std'  => '#ffffff',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Highlight', 'my-portfolio-metabox' ),
                'id'   => $prefix . 'highlight_images',
				
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'All Images', 'my-portfolio-metabox' ),
                'id'   => $prefix . 'all_images',
				
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'BG Images', 'my-portfolio-metabox' ),
                'id'   => $prefix . 'bg_imges',
            ],
        ],
    ];

    return $meta_boxes;
}
//////////////////////////////
/* end metaBoxGroup - general */
//////////////////////////////

//////////////////////////////
/* metaBoxGroup - slider */
//////////////////////////////
add_filter( 'rwmb_meta_boxes', 'metaBoxGroupSlider' );

function metaBoxGroupSlider( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Extras', 'my-slider-metabox' ),
        'id'         => 'wp-rs-slider',
        'post_types' => ['slider'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'color',
                'name' => esc_html__( 'Font Color', 'my-slider-metabox' ),
                'id'   => $prefix . 'font_color',
				'std'  => '#303030',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'BG Color', 'my-slider-metabox' ),
                'id'   => $prefix . 'bg_color',
				'std'  => '#ffffff',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Highlight', 'my-slider-metabox' ),
                'id'   => $prefix . 'highlight_images',
				
            ],
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'Multi Images', 'my-slider-metabox' ),
                'id'   => $prefix . 'all_images',
				
            ],
        ],
    ];

    return $meta_boxes;
}
//////////////////////////////
/* end metaBoxGroup - general */
//////////////////////////////