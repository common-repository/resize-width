<?php
/**
 * Plugin Name:     Resize Editor Width
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     It's very simple. Only resize contents width.
 * Author:          hamaguchi
 * Author URI:      
 * Text Domain:     resize-width
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Resize_Width
 */

// Your code starts here.
load_plugin_textdomain('resize-width', false, basename( dirname( __FILE__ ) ) . '/languages' );

// enqueue original styelsheet.
function resize_width_block_editor() {
    wp_enqueue_style( 'my-gutenberg-style',  plugins_url('my-gutenberg-style.css', __FILE__), array(), null);
}
add_action( 'enqueue_block_editor_assets', 'resize_width_block_editor' );