<?php
if (!function_exists( 'especialidad_piloto' ) ){
    function especialidad_piloto() {

        $labels = array(
            'name'                       => _x( 'Especialidades', 'Taxonomy General Name', 'primerapagina' ),
            'singular_name'              => _x( 'Especialidad', 'Taxonomy Singular Name', 'primerapagina' ),
            'menu_name'                  => __( 'Especialidades', 'primerapagina' ),
            'all_items'                  => __( 'Todas las especialidades', 'primerapagina' ),
            'parent_item'                => __( 'Parent Especialidad', 'primerapagina' ),
            'parent_item_colon'          => __( 'Parent Especialidad', 'primerapagina' ),
            'new_item_name'              => __( 'New Item Name', 'primerapagina' ),
            'add_new_item'               => __( 'Add New Item', 'primerapagina' ),
            'edit_item'                  => __( 'Edit Item', 'primerapagina' ),
            'update_item'                => __( 'Update Item', 'primerapagina' ),
            'view_item'                  => __( 'View Item', 'primerapagina' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'primerapagina' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'primerapagina' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'primerapagina' ),
            'popular_items'              => __( 'Popular Items', 'primerapagina' ),
            'search_items'               => __( 'Search Items', 'primerapagina' ),
            'not_found'                  => __( 'Not Found', 'primerapagina' ),
            'no_terms'                   => __( 'No items', 'primerapagina' ),
            'items_list'                 => __( 'Items list', 'primerapagina' ),
            'items_list_navigation'      => __( 'Items list navigation', 'primerapagina' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'piloto_especialidad', array( 'piloto' ), $args );
    
    }
    add_action( 'init', 'especialidad_piloto', 0 );
}

