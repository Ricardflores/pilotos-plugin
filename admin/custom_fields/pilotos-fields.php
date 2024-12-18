<?php
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

