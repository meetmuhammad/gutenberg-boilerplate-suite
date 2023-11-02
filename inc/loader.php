<?php 
/**
 * Plugin Main Loader File
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! class_exists( 'Custom_Gutenberg_Blocks_Loader' ) ) {

    class Custom_Gutenberg_Blocks_Loader {

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            $this->includes();
        }

        /**
         * Include all the required files
         * @return void
         */
        public function includes() {
            require_once CUSTOM_GUTENBERG_BLOCKS_PATH . 'inc/classes/blocks-category.php';
            require_once CUSTOM_GUTENBERG_BLOCKS_PATH . 'inc/classes/blocks-register.php';
            require_once CUSTOM_GUTENBERG_BLOCKS_PATH . 'inc/classes/blocks-style.php';
        }

    }

}

new Custom_Gutenberg_Blocks_Loader(); // Initialize the class instance
