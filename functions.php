<?php
/**
 * Theme Functions
 * 
 * @package Twenty Quarantino
 */

if (!defined('TWENTYQUARANTINO_DIR_PATH')) {
  define('TWENTYQUARANTINO_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('TWENTYQUARANTINO_DIR_URI')) {
  define('TWENTYQUARANTINO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once TWENTYQUARANTINO_DIR_PATH . '/inc/helpers/autoloader.php';

function twentyquarantino_get_theme_instance()
{
  \TWENTYQUARANTINO_THEME\Inc\TWENTYQUARANTINO_THEME::get_instance();
}
twentyquarantino_get_theme_instance();

add_action('wp_enqueue_scripts', 'twentyquarantino_enqueue_scripts')
  ?>