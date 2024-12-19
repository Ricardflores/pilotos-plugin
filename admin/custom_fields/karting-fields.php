<?php
if (!function_exists('descripcion')){

    function descripcion() {

        // Registra un nuevo metabox
        $prefix = 'campo_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Descripcion', 'http://primerapagina.local/' ),
            'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        
            // Agrega campos al metabox
            $cmb->add_field( array(
                'name'       => __( 'descripcion', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'descripcion',
                'type'       => 'text',
            ) );

    }
    add_action( 'cmb2_init', 'descripcion' );
}

if (!function_exists('kart_galeria')){

    function kart_galeria() {

        // Registra un nuevo metabox
        $prefix = 'kartgalery_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Galeria', 'http://primerapagina.local/' ),
            'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        
        $cmb->add_field( array(
            'name'    => 'Imagen 1 ',
            'desc'    => 'Upload an image or enter an URL.',
            'id'      => 'Imagen_1',
            'type'    => 'file',
        ) );

    }
    add_action( 'cmb2_init', 'kart_galeria' );
}

if (!function_exists('horarios_karting') ) {

    function horarios_karting() {

            // Registra un nuevo metabox
            $prefix = 'horarios_'; // Prefijo para los IDs de los campos

            $cmb = new_cmb2_box( array(
                'id'            => $prefix . 'metabox',
                'title'          => __( 'Horarios', 'http://primerapagina.local/' ),
                'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
                'context'        => 'normal',
                'priority'      => 'high',
                'show_names'     => true,
            ) );

            // Agrega campos al metabox
            $cmb->add_field( array(
                'name'       => __( 'horario1', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'horario_karting1',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'precio1', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'precio1',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'horario2', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'horario_karting2',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'precio2', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'precio2',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'horario3', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'horario_karting3',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'precio3', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'precio3',
                'type'       => 'text',
            ) );


        }

    add_action( 'cmb2_init', 'horarios_karting' );
   
}
if (!function_exists('karting_redes')){


    function karting_redes() {

        // Registra un nuevo metabox
        $prefix = 'Redes2_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Redes_sociales', 'http://primerapagina.local/' ),
            'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );

        // Agrega campos al metabox
        $cmb->add_field( array(
            'name'       => __( 'RedF', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_karting1',
            'type'       => 'text',
        ) );
    
            // Agrega campos al metabox
            $cmb->add_field( array(
            'name'       => __( 'RedT', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_karting2',
            'type'       => 'text',
        ) );
    
             // Agrega campos al metabox
            $cmb->add_field( array(
            'name'       => __( 'RedP', 'http://primerapagina.local/' ),
            'id'         => $prefix . 'Red_karting3',
            'type'       => 'text',
        ) );
    
             // Agrega campos al metabox
             $cmb->add_field( array(
                'name'       => __( 'RedY', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'Red_karting4',
                'type'       => 'text',
            ) );
    }
    add_action( 'cmb2_init', 'karting_redes' );
}

if (!function_exists('karting_selector')){


    function karting_selector() {

        // Registra un nuevo metabox
        $prefix = 'selector_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Selector_piloto', 'http://primerapagina.local/' ),
            'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        $cmb->add_field( array(
            'name'      	=> __( 'Piloto', 'cmb2' ),
            'id'        	=>'yourprefix_demo_ajax',
            'type'      	=> 'post_search_ajax',
            'desc'			=> __( '(Start typing post title)', 'cmb2' ),
            // Optional :
            'limit'      	=> 10, 		// Limit selection to X items only (default 1)
            'sortable' 	 	=> true, 	// Allow selected items to be sortable (default false)
            'query_args'	=> array(
                'post_type'			=> array( 'piloto' ),
                'post_status'		=> array( 'publish' ),
                'posts_per_page'	=> -1
            )
        ) );
    }
    add_action( 'cmb2_init', 'karting_selector' );
}

if (!function_exists('descripcion_karting')){

    function descripcion_karting() {

        // Registra un nuevo metabox
        $prefix = 'campo2_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'descripcion_karting', 'http://primerapagina.local/' ),
            'object_types'   => array( 'karting' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        
            // Agrega campos al metabox
            $cmb->add_field( array(
                'name'       => __( 'Descripcion karting', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'descripcion_karting',
                'type'       => 'text',
            ) );

    }
    add_action( 'cmb2_init', 'descripcion_karting' );
}
