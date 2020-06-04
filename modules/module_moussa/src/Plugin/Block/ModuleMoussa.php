<?php

namespace Drupal\module_moussa\Plugin\Block;

use Drupal\Core\Block\BlockBase;

//etape 1 : On appelle ce hook pour déclarer un block

/**
 * Provides a 'module1' Block
 *
 * @Block(
 *   id = "module1_block",
 *   admin_label = @Translation("module test block"),
 * )
 */


class ModuleMoussa extends BlockBase {

  
  public function build() {
	return array(
      '#title' => 'Test!',
      '#markup' => 'Hello, World!Moussa',
    );	
  }
}