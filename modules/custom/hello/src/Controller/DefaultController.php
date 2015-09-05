<?php

/**
 * @file
 * Contains Drupal\hello\Controller\DefaultController.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\hello\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello @name!', ['@name' => $name])
   ];
  }

}
