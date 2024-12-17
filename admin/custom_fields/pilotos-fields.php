<?php
/* ------------------------------ post personalizados -------------*/ 
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

if (!function_exists('pilotos_metaboxes')){

    function pilotos_metaboxes() {

        // Registra un nuevo metabox
        $prefix = 'my_prefix_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'piloto', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Nombre', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Nombre_piloto',
            'type'       => 'text',
        ) );

        $cmb->add_field( array(
            'name'       => __( 'Edad', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Edad_piloto',
            'type'       => 'text',
        ) );

        $cmb->add_field( array(
            'name'       => __( 'Nacionalidad', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Nacionalidad_piloto',
            'type'       => 'text',
        ) );

        $cmb->add_field( array(
            'name'       => __( 'campeonatos', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'campeonatos_piloto',
            'type'       => 'text',
        ) );

        $cmb->add_field( array(
            'name'       => __( 'Escuderia', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Escuderia_piloto',
            'type'       => 'text',
        ) );

        $cmb->add_field( array(
            'name'       => __( 'Especialidades', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Especialidades_piloto',
            'type'       => 'text',
        ) );
        // ... Agrega más campos aquí ...

    }
    add_action( 'cmb2_init', 'pilotos_metaboxes' );
}

if (!function_exists('pilotos_galeria')){


    function pilotos_galeria() {

        // Registra un nuevo metabox
        $prefix = 'galeria_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Galeria', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        
        $cmb->add_field( array(
            'name'         => esc_html__( 'Multiple Files', 'cmb2' ),
            'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
            'id'           => $prefix . 'piloto',
            'type'         => 'file_list',
            'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        ) );

    }
    add_action( 'cmb2_init', 'pilotos_galeria' );
}

if (!function_exists('pilotos_habilidades_titulo')){

    function pilotos_habilidades_titulo() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'HabilidadesT', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Habilidades titulo', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'HabilidadesT',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_habilidades_titulo' );
} 
/*
if (!function_exists('pilotos_Habilidades_1')){

    function pilotos_habilidades_1() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Habilidades_1', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Habilidad_1', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Habilidades_1',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_HabilidadeS_1' );
} 

if (!function_exists('pilotos_Habilidades_2')){

    function pilotos_habilidades_2() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Habilidades_2', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Habilidad_2', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Habilidades_2',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_Habilidades_2' );
} 

if (!function_exists('pilotos_Habilidades_3')){

    function pilotos_habilidades_3() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Habilidades_3', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Habilidad_3', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Habilidades_3',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_Habilidades_3' );
} 
*/

if (!function_exists('pilotos_Habilidades_porcentaje_1')){

    function pilotos_Habilidades_porcentaje_1() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Porcentaje_1', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Porcentaje_habilidad_1', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Porcentaje_1',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_Habilidades_porcentaje_1' );
} 

if (!function_exists('pilotos_Habilidades_porcentaje_2')){

    function pilotos_Habilidades_porcentaje_2() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Porcentaje_2', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Porcentaje_habilidad_2', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Porcentaje_2',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_Habilidades_porcentaje_2' );
} 

if (!function_exists('pilotos_Habilidades_porcentaje_3')){

    function pilotos_Habilidades_porcentaje_3() {

        // Registra un nuevo metabox
        $prefix = 'Habilidades_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Porcentaje_3', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Porcentaje_habilidad_3', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Porcentaje_3',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'pilotos_Habilidades_porcentaje_3' );
} 

if (!function_exists('Galeria_titulo')){

    function Galeria_titulo() {

        // Registra un nuevo metabox
        $prefix = 'galeriati_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Galeria_titulo', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'Galeria_titulo', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Titulo_galeria',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_init', 'Galeria_titulo' );
}

if (!function_exists('pilotos_redes')){


    function pilotos_redes() {

        // Registra un nuevo metabox
        $prefix = 'Redes_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Redes_social', 'http://primerapagina.local/' ),
            'object_types'   => array( 'piloto' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'RedF', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_piloto1',
            'type'       => 'text',
        ) );
    
            // Agrega campos al metabox
            $cmb->add_field( array(
            'name'       => __( 'RedT', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_piloto2',
            'type'       => 'text',
        ) );
    
             // Agrega campos al metabox
            $cmb->add_field( array(
            'name'       => __( 'RedP', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_piloto3',
            'type'       => 'text',
        ) );
    
             // Agrega campos al metabox
             $cmb->add_field( array(
                'name'       => __( 'RedY', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'Red_piloto4',
                'type'       => 'text',
            ) );
    }
    add_action( 'cmb2_init', 'pilotos_redes' );
}

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
