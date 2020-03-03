<?php

declare(strict_types = 1);

namespace Drupal\druidfi_api_tools\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines druidfi_api_tools.api_request annotation object.
 *
 * @Annotation
 */
class RestApiRequest extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The description of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description;

}