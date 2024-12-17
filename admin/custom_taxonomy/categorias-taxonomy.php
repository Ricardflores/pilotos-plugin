<?php
// Register Custom Taxonomy
if (!function_exists('Categorias_taxonomy') ) {
    function Categorias_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'primerapagina' ),
            'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'primerapagina' ),
            'menu_name'                  => __( 'Categorias', 'primerapagina' ),
            'all_items'                  => __( 'All Categorias', 'primerapagina' ),
            'parent_item'                => __( 'Parent Item', 'primerapagina' ),
            'parent_item_colon'          => __( 'Parent Item:', 'primerapagina' ),
            'new_item_name'              => __( 'New Categoria', 'primerapagina' ),
            'add_new_item'               => __( 'Add Categoria', 'primerapagina' ),
            'edit_item'                  => __( 'Edit Categoria', 'primerapagina' ),
            'update_item'                => __( 'Update Categoria', 'primerapagina' ),
            'view_item'                  => __( 'View Categoria', 'primerapagina' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'primerapagina' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'primerapagina' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'primerapagina' ),
            'popular_items'              => __( 'Popular Items', 'primerapagina' ),
            'search_items'               => __( 'Search Categorias', 'primerapagina' ),
            'not_found'                  => __( 'Not Found', 'primerapagina' ),
            'no_terms'                   => __( 'No Categorias', 'primerapagina' ),
            'items_list'                 => __( 'Categorias list', 'primerapagina' ),
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
        register_taxonomy( 'Categoria', array( 'piloto' ), $args );
    
    }
    add_action( 'init', 'Categorias_taxonomy', 0 );
}
