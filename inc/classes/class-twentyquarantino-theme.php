<?php
/**
 * Bootstrap the Theme.
 * 
 * @package Twenty Quarantino
 */

namespace TWENTYQUARANTINO_THEME\Inc;

use TWENTYQUARANTINO_THEME\Inc\Traits\Singleton;

class TWENTYQUARANTINO_THEME
{
  use Singleton;

  protected function __construct()
  {
    // load class.
    $this->set_hooks();
  }

  protected function set_hooks()
  {
    // actions and filters
  }
}