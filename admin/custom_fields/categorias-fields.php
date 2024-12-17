<?php

if (!function_exists('Galeria_clases')){

    function Galeria_clases() {

        // Registra un nuevo metabox
        $prefix = 'galeria_'; // Prefijo para los IDs de los campos

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'          => __( 'Galeria', 'http://primerapagina.local/' ),
            'object_types'   => array( 'categorias' ), // Cambia 'product' por tu tipo de publicación
            'context'        => 'normal',
            'priority'      => 'high',
            'show_names'     => true,
        ) );
        
        $cmb->add_field( array(
            'name'         => esc_html__( 'Multiple Files', 'cmb2' ),
            'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
            'id'           => $prefix . 'Categorias_gale',
            'type'         => 'file_list',
            'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        ) );

    }
    add_action( 'cmb2_init', 'Galeria_clases' );

}