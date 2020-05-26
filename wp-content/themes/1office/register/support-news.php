<?php
/*
* Register Post Type Support Feature
*/
function register_support_news() {

	$labels = array(
		'name'                  => __( 'Tính năng mới', 'mdn-custom-post-type' ),
		'singular_name'         => __( 'Tính năng mới', 'mdn-custom-post-type' ),
		'menu_name'             => __( 'Tính năng mới', 'mdn-custom-post-type' ),
		'name_admin_bar'        => __( 'Tính năng mới', 'mdn-custom-post-type' ),
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
		'label'                 => __( 'Tính năng mới', 'mdn-custom-post-type' ),
		'description'           => __( 'Post Type Support News', 'mdn-custom-post-type' ),
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
	register_post_type( 'support_news', $args );

}
add_action( 'init', 'register_support_news', 0 );
?>
