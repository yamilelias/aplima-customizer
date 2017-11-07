<?php
/**
Plugin Name: APLima Customizer
Plugin URI: https://github.com/yamilelias/aplima-customizer
Description: Plugin that will add the lost functionality due to a free theme implementation.
Version: 0.5.0
Author: Yamil Elías
Author URI: https://yamilelias.github.io
License: GPLv3
 */

if( ! class_exists( 'aplima_customizer' ) ) {
    add_action( 'init', array( 'aplima_customizer', 'instantiate' ), 0 );
    class aplima_customizer {
        /**
         * Reusable object instance.
         *
         * @type object
         */
        protected static $instance = null;
        /**
         * Creates a new instance. Called on 'init'.
         * May be used to access class methods from outside.
         *
         * @see    __construct()
         */
        public static function instantiate() {
            null === self :: $instance AND self :: $instance = new self;
            return self :: $instance;
        }
        /**
         * wp_anchor_link constructor.
         *
         * @since 0.5.0
         */
        public function __construct() {
            // Enqueue scripts
            add_action( 'init', array( $this, 'enqueue_scripts' ), 999 );
            // that's it!
        }
        /**
         * Enqueue needed scripts so the plugin animation works properly.
         *
         * @since 0.5.0
         */
        public function enqueue_scripts() {
            // jQuery
            if(!wp_script_is('jquery')){
                wp_enqueue_script('cdn-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
            } else {
                wp_dequeue_script('cdn-jquery'); // Let's use this version so we don't have problems...
                wp_enqueue_script('cdn-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
            }
            // Our script
            if(!wp_script_is('anchor-link')){
                wp_enqueue_script( 'anchor-link', plugins_url('anchor-link.js', __FILE__), ['cdn-jquery']);
            }
        }
    }
}