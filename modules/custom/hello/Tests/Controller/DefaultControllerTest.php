<?php

/**
 * @file
 * Contains Drupal\hello\Tests\DefaultController.
 */

namespace Drupal\hello\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the hello module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "hello DefaultController's controller functionality",
      'description' => 'Test Unit for module hello and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests hello functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module hello.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
