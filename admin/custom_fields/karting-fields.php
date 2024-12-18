<?php
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
            'name'         => esc_html__( 'Multiple Files', 'cmb2' ),
            'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
            'id'           => $prefix . 'kart_galeria',
            'type'         => 'file_list',
            'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        ) );

    }
    add_action( 'cmb2_init', 'kart_galeria' );
}

if (!function_exists('Horarios_karting') ) {

    function Horarios_karting() {

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
                'id'         => $prefix . 'precio_karting1',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'horario2', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'horario_karting2',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'precio2', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'precio_karting2',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'horario3', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'horario_karting3',
                'type'       => 'text',
            ) );

            $cmb->add_field( array(
                'name'       => __( 'precio3', 'http://primerapagina.local/' ),
                'id'         => $prefix . 'precio_karting3',
                'type'       => 'text',
            ) );

    add_action( 'cmb2_init', 'Horarios_karting' );
    }
}
