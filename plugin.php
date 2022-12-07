<?php
namespace RB_Section_Header;

use RB_Section_Header\PageSettings\Page_Settings;


/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.0.0
 */
class RB_Section_Header_Plugin {

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Add Category
	 */

    public function rb_section_header_elementor_category($manager)
    {
        $manager->add_category(
            'rb-section-header',
            array(
                'title' => esc_html__('RB Widgets', 'rb-section-header')
            )
        );
    }

	/**
	 * widget_scripts
	 *
	 * Load required plugin js files.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_register_script( 'rb-section-header', plugins_url( '/assets/js/custom.js', __FILE__ ), [ 'jquery' ], false, true );
	}

	/**
	 * widget_styles
	 *
	 * Load required plugin css files.
	 *
	 * @since 1.0.0
	 * @access public
	 */
    function widget_styles()
    {
        wp_enqueue_style('rb-section-header', plugins_url('/', __FILE__) . 'assets/css/style.css', null, '1.0.0');
    }

	/**
	 * admin_styles
	 *
	 * Load required plugin css files.
	 *
	 * @since 1.0.0
	 * @access public
	 */
    function admin_styles()
    {
        wp_enqueue_style('rb-section-header-admin', plugins_url('/', __FILE__) . 'assets/css/admin.css', null, '1.0.0');
    }

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @param Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_widgets( $widgets_manager ) {
		// Its is now safe to include Widgets files
		foreach($this->rb_section_header_widget_list() as $widget_file_name){
			require_once( RB_SECTION_HEADER_ELEMENTS_PATH . "/{$widget_file_name}.php" );
		}
	}

	public function rb_section_header_widget_list() {
		return [
			'section-header',
		];
	}

	/**
	 * Add page settings controls
	 *
	 * Register new settings for a document page settings.
	 *
	 * @since 1.2.1
	 * @access private
	 */
	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/manager.php' );
		new Page_Settings();
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widget styles
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_styles' ] );

		// Register admin styles
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'admin_styles' ] );

		// Register widgets
		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );

		// Elementor category
		add_action('elementor/elements/categories_registered', [$this, 'rb_section_header_elementor_category']);

		$this->add_page_settings_controls();
	}

}

// Instantiate Plugin Class
RB_Section_Header_Plugin::instance();