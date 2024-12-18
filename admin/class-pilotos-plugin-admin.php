<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://x.com/rikiflores91
 * @since      1.0.0
 *
 * @package    Pilotos_Plugin
 * @subpackage Pilotos_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Pilotos_Plugin
 * @subpackage Pilotos_Plugin/admin
 * @author     Ricatrdo <rikiflores91@gmail.com>
 */
class Pilotos_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->load_dependencies();

	}

	public function load_dependencies() {
	
		/**
		 * This section is responsible to add the CMB2 Metaboxes
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/cpt/pilotos-post-type.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/cpt/karting-post-type.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/cpt/ejercicios-post-type.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_fields/page-fields.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_fields/pilotos-fields.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_fields/karting-fields.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_fields/categorias-fields.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_taxonomy/categorias-taxonomy.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_taxonomy/categorias-karting-taxonomy.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/custom_taxonomy/especialidades-taxonomy.php';
		







	}
	
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pilotos_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pilotos_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/pilotos-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pilotos_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pilotos_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pilotos-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}
