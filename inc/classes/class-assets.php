<?php
/**
 * Enqueue theme assets
 * 
 * @package Twenty Quarantino
 */

namespace TwentyQuarantino_Theme\Inc;

use TWENTYQUARANTINO_THEME\Inc\Traits\Singleton;

class Assets
{
  use Singleton;
  protected function __construct()
  {
    // load class.
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    // actions and filters
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles()
  {
    // Register Styles
    wp_register_style('style', TWENTYQUARANTINO_DIR_URI, [], filemtime(TWENTYQUARANTINO_DIR_PATH . '/style.css'), 'all');
    wp_register_style('bootstrap', TWENTYQUARANTINO_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

    // Enqueue Styles
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
  }

  public function register_scripts()
  {
    // Register Scripts
    wp_register_script('main', TWENTYQUARANTINO_DIR_URI . '/assets/main.js', [], filemtime(TWENTYQUARANTINO_DIR_PATH . '/assets/main.js'), true);
    wp_register_script('bootstrap', TWENTYQUARANTINO_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    // Enqueue Scripts
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');
  }
}