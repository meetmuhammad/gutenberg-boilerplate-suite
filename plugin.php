<?php
/**
 * Plugin Name:       Custom Gutenberg Kit
 * Description:       A Gutenberg block plugin, crafted using ESNext standards and JSX, requiring a build process for development.
 * Requires at least: WordPress 6.0
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            Ammar
 * Author URI:        https://www.toptal.com/resume/muhammad-ammar-ilyas
 * License:           GPL v2.0 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-gutenberg-kit
 * Domain Path:       /languages
 */

/**
  * @package CustomBlocks
  *  Prefix for this plugin: [custom-gutenberg-kit] and [CUSTOM_GUTENBERG_KIT]
  */

	if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! class_exists( 'Custom_Gutenberg_Blocks' ) ) {

    final class Custom_Gutenberg_Blocks {

        protected static $instance = null;

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            $this->define_constants();
            $this->includes();
        }

        /**
         * Define the plugin constants
         * @return void
         */
        public function define_constants() {
            define( 'CUSTOM_GUTENBERG_BLOCKS_VERSION', '1.0.0' );
            define( 'CUSTOM_GUTENBERG_BLOCKS_DIR', __DIR__ );
            define( 'CUSTOM_GUTENBERG_BLOCKS_URL', plugin_dir_url( __FILE__ ) );
            define( 'CUSTOM_GUTENBERG_BLOCKS_PATH', plugin_dir_path( __FILE__ ) );
        }

        /**
         * Include all the required files
         * @return void
         */
        public function includes() {
            require_once __DIR__ . '/inc/loader.php';
        }

        /**
         * Initialize the plugin
         * @return \Custom_Gutenberg_Blocks
         */
        public static function init() {
            if( is_null( self::$instance ) ) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    }
}

/**
 * Initialize the plugin
 * @return \Custom_Gutenberg_Blocks
 */
function custom_gutenberg_blocks_init() {
    return Custom_Gutenberg_Blocks::init();
}

// Kick-off the plugin
custom_gutenberg_blocks_init();