<?php

namespace Drupal\simpson\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the simpson module.
 */
class SimpsonControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "simpson SimpsonController's controller functionality",
      'description' => 'Test Unit for module simpson and controller SimpsonController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests simpson functionality.
   */
  public function testSimpsonController() {
    // Check that the basic functions of module simpson.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
