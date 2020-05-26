<?php
/*
* Register Post Type Support Feature
*/
function register_support_feature() {

	$labels = array(
		'name'                  => __( 'HD sử dụng', 'mdn-custom-post-type' ),
		'singular_name'         => __( 'HD sử dụng', 'mdn-custom-post-type' ),
		'menu_name'             => __( 'HD sử dụng', 'mdn-custom-post-type' ),
		'name_admin_bar'        => __( 'HD sử dụng', 'mdn-custom-post-type' ),
		'all_items'             => __( 'Xem tất cả', 'mdn-custom-post-type' ),
		'add_new_item'          => __( 'Thêm mới', 'mdn-custom-post-type' ),
		'add_new'               => __( 'Thêm mới', 'mdn-custom-post-type' ),
		'new_item'              => __( 'Thêm mới', 'mdn-custom-post-type' ),
		'edit_item'             => __( 'Chỉnh sửa', 'mdn-custom-post-type' ),
		'update_item'           => __( 'Chỉnh sửa', 'mdn-custom-post-type' ),
		'view_item'             => __( 'Xem', 'mdn-custom-post-type' ),
		'view_items'            => __( 'Xem', 'mdn-custom-post-type' ),
	);
	$args = array(
		'label'                 => __( 'HD sử dụng', 'mdn-custom-post-type' ),
		'description'           => __( 'Post Type Support Feature', 'mdn-custom-post-type' ),
		'labels'                => $labels,
		'supports'              => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions", "author", "page-attributes", "post-formats" ],
		'hierarchical'          => true,
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-image-filter',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'support_feature', $args );

}
add_action( 'init', 'register_support_feature', 0 );

/*
* Regester Taxonomy Feature Cateogry Of Support Feature
*/
function register_feature_category() {

	$labels = array(
		'name'                       => __( 'Feature Category', 'mdn-custom-post-type' ),
		'singular_name'              => __( 'Feature Category', 'mdn-custom-post-type' ),
		'menu_name'                  => __( 'Feature Category', 'mdn-custom-post-type' ),
		'all_items'                  => __( 'Xem tất cả', 'mdn-custom-post-type' ),
		'parent_item'                => __( 'Parent Item', 'mdn-custom-post-type' ),
		'parent_item_colon'          => __( 'Parent Item:', 'mdn-custom-post-type' ),
		'new_item_name'              => __( 'Thêm mới', 'mdn-custom-post-type' ),
		'add_new_item'               => __( 'Thêm mới', 'mdn-custom-post-type' ),
		'edit_item'                  => __( 'Chỉnh sửa', 'mdn-custom-post-type' ),
		'update_item'                => __( 'Chỉnh sửa', 'mdn-custom-post-type' ),
		'view_item'                  => __( 'Xem', 'mdn-custom-post-type' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'feature', array( 'support_feature' ), $args );

}
add_action( 'init', 'register_feature_category', 0 );
?>
