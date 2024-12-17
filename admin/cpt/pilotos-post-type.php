<?php
// Register Custom Post Type
if (!function_exists('custom_post_type')){

    function custom_post_type() {

        $labels = array(
            'name'                  => _x( 'Piloto', 'Post Type General Name', 'primerapagina' ),
            'singular_name'         => _x( 'Piloto', 'Post Type Singular Name', 'primerapagina' ),
            'menu_name'             => __( 'Pilotos', 'primerapagina' ),
            'name_admin_bar'        => __( 'Piloto', 'primerapagina' ),
            'archives'              => __( 'Item Archives', 'primerapagina' ),
            'attributes'            => __( 'Item Attributes', 'primerapagina' ),
            'parent_item_colon'     => __( 'Parent Item:', 'primerapagina' ),
            'all_items'             => __( 'Todos los pilotos', 'primerapagina' ),
            'add_new_item'          => __( 'Agregar un nuevo piloto', 'primerapagina' ),
            'add_new'               => __( 'Add New', 'primerapagina' ),
            'new_item'              => __( 'New Item', 'primerapagina' ),
            'edit_item'             => __( 'Edit Item', 'primerapagina' ),
            'update_item'           => __( 'Update Item', 'primerapagina' ),
            'view_item'             => __( 'View Item', 'primerapagina' ),
            'view_items'            => __( 'View Items', 'primerapagina' ),
            'search_items'          => __( 'Search Item', 'primerapagina' ),
            'not_found'             => __( 'Not found', 'primerapagina' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'primerapagina' ),
            'featured_image'        => __( 'Featured Image', 'primerapagina' ),
            'set_featured_image'    => __( 'Set featured image', 'primerapagina' ),
            'remove_featured_image' => __( 'Remove featured image', 'primerapagina' ),
            'use_featured_image'    => __( 'Use as featured image', 'primerapagina' ),
            'insert_into_item'      => __( 'Insert into item', 'primerapagina' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'primerapagina' ),
            'items_list'            => __( 'Items list', 'primerapagina' ),
            'items_list_navigation' => __( 'Items list navigation', 'primerapagina' ),
            'filter_items_list'     => __( 'Filter items list', 'primerapagina' ),
        );
        $args = array(
            'label'                 => __( 'Post Type', 'primerapagina' ),
            'description'           => __( 'Post Type Description', 'primerapagina' ),
            'labels'                => $labels,
            'supports'              => array ('title', 'editor', 'slug', 'thumbnail'),
        //	'taxonomies'            => array( 'category', 'post_tag' ), */
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'piloto ', $args );

}
add_action( 'init', 'custom_post_type', 0 );
}