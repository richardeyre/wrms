<?php

// Register Custom Post Type
function post_type_layout() {
	$labels = array(
		'name'                => _x( 'Layouts', 'Post Type General Name', 'wrms' ),
		'singular_name'       => _x( 'Layout', 'Post Type Singular Name', 'wrms' ),
		'menu_name'           => __( 'Layouts', 'wrms' ),
		'parent_item_colon'   => __( 'Parent Layout:', 'wrms' ),
		'all_items'           => __( 'All Layouts', 'wrms' ),
		'view_item'           => __( 'View Layout', 'wrms' ),
		'add_new_item'        => __( 'Add New Layout', 'wrms' ),
		'add_new'             => __( 'New Layout', 'wrms' ),
		'edit_item'           => __( 'Edit Layout', 'wrms' ),
		'update_item'         => __( 'Update Layout', 'wrms' ),
		'search_items'        => __( 'Search layouts', 'wrms' ),
		'not_found'           => __( 'No layouts found', 'wrms' ),
		'not_found_in_trash'  => __( 'No layouts found in Trash', 'wrms' ),
	);

        $rewrite = array(
		'slug'                => 'layouts',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'layout', 'wrms' ),
		'description'         => __( 'Club layouts', 'wrms' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'era', 'scale' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
                'rewrite'             => $rewrite,
	);

	register_post_type( 'layout', $args );
}

// Hook into the 'init' action
add_action( 'init', 'post_type_layout', 0 );


// Register Custom Post Type
function post_type_exhibition() {
	$labels = array(
		'name'                => _x( 'Exhibitions', 'Post Type General Name', 'wrms' ),
		'singular_name'       => _x( 'Exhibition', 'Post Type Singular Name', 'wrms' ),
		'menu_name'           => __( 'Exhibitions', 'wrms' ),
		'parent_item_colon'   => __( 'Parent Exhibition:', 'wrms' ),
		'all_items'           => __( 'All Exhibitions', 'wrms' ),
		'view_item'           => __( 'View Exhibition', 'wrms' ),
		'add_new_item'        => __( 'Add New Exhibition', 'wrms' ),
		'add_new'             => __( 'New Exhibition', 'wrms' ),
		'edit_item'           => __( 'Edit Exhibition', 'wrms' ),
		'update_item'         => __( 'Update Exhibition', 'wrms' ),
		'search_items'        => __( 'Search exhibitions', 'wrms' ),
		'not_found'           => __( 'No exhibitions found', 'wrms' ),
		'not_found_in_trash'  => __( 'No exhibitions found in Trash', 'wrms' ),
	);

        $rewrite = array(
		'slug'                => 'exhibitions',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'exhibition', 'wrms' ),
		'description'         => __( 'Club exhibitions', 'wrms' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array(  ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
                'rewrite'             => $rewrite,
	);

	register_post_type( 'exhibition', $args );
}

// Hook into the 'init' action
add_action( 'init', 'post_type_exhibition', 0 );

// Register Custom Taxonomy
function custom_taxonomy_scale()  {
	$labels = array(
		'name'                       => _x( 'Scales', 'Taxonomy General Name', 'wrms' ),
		'singular_name'              => _x( 'Scale', 'Taxonomy Singular Name', 'wrms' ),
		'menu_name'                  => __( 'Scale', 'wrms' ),
		'all_items'                  => __( 'All Scales', 'wrms' ),
		'parent_item'                => __( 'Parent Scale', 'wrms' ),
		'parent_item_colon'          => __( 'Parent Scale:', 'wrms' ),
		'new_item_name'              => __( 'New Scale Name', 'wrms' ),
		'add_new_item'               => __( 'Add New Scale', 'wrms' ),
		'edit_item'                  => __( 'Edit Scale', 'wrms' ),
		'update_item'                => __( 'Update Scale', 'wrms' ),
		'separate_items_with_commas' => __( 'Separate scales with commas', 'wrms' ),
		'search_items'               => __( 'Search scales', 'wrms' ),
		'add_or_remove_items'        => __( 'Add or remove scales', 'wrms' ),
		'choose_from_most_used'      => __( 'Choose from the most used scales', 'wrms' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);

	register_taxonomy( 'scale', 'layout', $args );
}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_scale', 0 );

// Register Custom Taxonomy
function custom_taxonomy_era()  {
	$labels = array(
		'name'                       => _x( 'Eras', 'Taxonomy General Name', 'wrms' ),
		'singular_name'              => _x( 'Era', 'Taxonomy Singular Name', 'wrms' ),
		'menu_name'                  => __( 'Era', 'wrms' ),
		'all_items'                  => __( 'All Eras', 'wrms' ),
		'parent_item'                => __( 'Parent Era', 'wrms' ),
		'parent_item_colon'          => __( 'Parent Era:', 'wrms' ),
		'new_item_name'              => __( 'New Era Name', 'wrms' ),
		'add_new_item'               => __( 'Add New Era', 'wrms' ),
		'edit_item'                  => __( 'Edit Era', 'wrms' ),
		'update_item'                => __( 'Update Era', 'wrms' ),
		'separate_items_with_commas' => __( 'Separate eras with commas', 'wrms' ),
		'search_items'               => __( 'Search eras', 'wrms' ),
		'add_or_remove_items'        => __( 'Add or remove eras', 'wrms' ),
		'choose_from_most_used'      => __( 'Choose from the most used eras', 'wrms' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);

	register_taxonomy( 'era', 'layout', $args );
}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_era', 0 );

// Add menu
register_nav_menu( 'main', 'Main menu' );

// Add the page title
function wrms_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'wrms' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wrms_wp_title', 10, 2 );
