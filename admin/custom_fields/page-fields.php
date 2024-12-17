<?php
/**
 * My first custom metabox with CMB2
 * 
 * @since 1.0.0
 * @link https://github.com/CMB2/CMB2/blob/develop/example-functions.php
 */

if ( ! function_exists( 'my_first_cmb2_metabox' ) ){

    /**
     * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
     */
    function my_first_cmb2_metabox() {

        $prefix = 'my_first_metabox';
        
        // Sample custom metabox registration
        $plugin_slug_metabox = new_cmb2_box( array(
            'id'            => $prefix,
            'title'         => esc_html__( 'My first metabox', 'plugin-slug' ),
            'object_types'  => array( 'page' ), // Post type
            'context'       => 'normal',
            'priority'      => 'default',
            'show_names'    => true, // Show field names on the left
        ) );

        // Sample custom field into the custom metabox
        $plugin_slug_metabox->add_field( array(
            'name'       => esc_html__( 'Custom Text Field', 'plugin-slug' ),
            'desc'       => esc_html__( 'Write something funny or simply Hello world !', 'plugin-slug' ),
            'id'         => $prefix . '_custom_text_field',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_admin_init', 'my_first_cmb2_metabox' );

}