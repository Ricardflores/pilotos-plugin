<?php
// Register Custom Taxonomy
if (!function_exists('categorias_taxonomy') ) {
    function categorias_taxonomy() {

        $labels = array(
            'name'                       => _x( 'categorias', 'Taxonomy General Name', 'primerapagina' ),
            'singular_name'              => _x( 'categoria', 'Taxonomy Singular Name', 'primerapagina' ),
            'menu_name'                  => __( 'categorias', 'primerapagina' ),
            'all_items'                  => __( 'All categorias', 'primerapagina' ),
            'parent_item'                => __( 'Parent Item', 'primerapagina' ),
            'parent_item_colon'          => __( 'Parent Item:', 'primerapagina' ),
            'new_item_name'              => __( 'New categoria', 'primerapagina' ),
            'add_new_item'               => __( 'Add categoria', 'primerapagina' ),
            'edit_item'                  => __( 'Edit categoria', 'primerapagina' ),
            'update_item'                => __( 'Update categoria', 'primerapagina' ),
            'view_item'                  => __( 'View categoria', 'primerapagina' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'primerapagina' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'primerapagina' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'primerapagina' ),
            'popular_items'              => __( 'Popular Items', 'primerapagina' ),
            'search_items'               => __( 'Search categorias', 'primerapagina' ),
            'not_found'                  => __( 'Not Found', 'primerapagina' ),
            'no_terms'                   => __( 'No categorias', 'primerapagina' ),
            'items_list'                 => __( 'categorias list', 'primerapagina' ),
            'items_list_navigation'      => __( 'Items list navigation', 'primerapagina' ),
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
        register_taxonomy( 'categoria', array( 'post' ), $args );
    
    }
    add_action( 'init', 'categorias_taxonomy', 0 );
}
