<?php
/**
 * Register Blocks Category
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! class_exists( 'Custom_Gutenberg_Blocks_Category' ) ) {
    
    class Custom_Gutenberg_Blocks_Category {

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            if( version_compare( $GLOBALS['wp_version'], '5.7', '<' ) ) {
                add_filter( 'block_categories', [ $this, 'register_block_category' ], 10, 2 );
            } else {
                add_filter( 'block_categories_all', [ $this, 'register_block_category' ], 10, 2 );
            }
        }

        /**
         * Register Blocks Category 
         * @return array
         */
        public function register_block_category( $categories, $post ) {
            return array_merge(
                array(
                    array(
                        'slug'  => 'custom-gutenberg-kit',
                        'title' => __( 'Custom Blocks', 'custom-gutenberg-kit' ),
                    ),
                ),
                $categories,
            );
        }

    }
}

new Custom_Gutenberg_Blocks_Category(); // Initialize the class instance
