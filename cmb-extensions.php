<?php
/*
Plugin Name: CMB Extensions
Plugin URI: https://github.com/retlehs/cmb-extensions
Description: Extensions for <a href="https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress">Custom Metaboxes and Fields</a>
Version: 0.1
Author: Ben Word
Author URI: http://benword.com/
License:
*/

/**
 * Load all extensions
 */
$extensions = array(
  'fontawesome',
);

foreach ($extensions as $extension) {
  include_once('lib/' . $extension . '.php');
  add_action('cmb_render_' . $extension, 'cmb_' . $extension, 10, 2);
}

/**
 * Enqueue CSS & JS
 */
function cmb_extensions_admin_scripts() {
  wp_register_style('cmb_extensions_css', plugin_dir_url(__FILE__) . '/css/cmb-extensions.css', false, null);
  wp_enqueue_style('cmb_extensions_css');

  wp_register_script('cmb_extensions_js', plugin_dir_url(__FILE__) . '/js/cmb-extensions.js', false, null, false);
  wp_enqueue_script('cmb_extensions_js');
}

add_action('admin_enqueue_scripts', 'cmb_extensions_admin_scripts');
