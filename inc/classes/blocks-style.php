<?php
/**
 * Register Dynamic Styles for Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! class_exists( 'Custom_Gutenberg_Dynamic_Style' ) ) {

    class Custom_Gutenberg_Dynamic_Style {
        
        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            add_filter( 'render_block', [ $this, 'dynamic_style' ], 10, 2 );
        }

        /**
         * Generate Dynamic Style
         * @return string
         */
        function dynamic_style( $block_content, $block ) {
            if ( isset( $block[ 'blockName' ] ) && str_contains( $block[ 'blockName' ], 'custom-gutenberg/' ) ) {
                if ( isset( $block[ 'attrs' ][ 'blockStyle' ] ) ) {
                    $style = $block[ 'attrs' ][ 'blockStyle' ];
                    $handle = isset( $block[ 'attrs' ][ 'uniqueId' ] ) ? $block[ 'attrs' ][ 'uniqueId' ] : 'custom-gutenberg-blocks';
    
                    // Convert style array to string, if needed
                    if ( is_array( $style ) ) {
                        $style = implode( ' ', $style );
                    }
    
                    // Minify style to remove extra spaces
                    $style = preg_replace( '/\s+/', ' ', $style );
                    
                    // Register and enqueue style
                    wp_register_style( $handle, false );
                    wp_enqueue_style( $handle );
                    wp_add_inline_style( $handle, $style );
                }
            }
            return $block_content;
        }
    }
}

new Custom_Gutenberg_Dynamic_Style(); // Initialize the class instance
