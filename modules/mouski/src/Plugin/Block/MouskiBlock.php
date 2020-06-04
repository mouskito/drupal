<?php

namespace Drupal\mouski\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MouskiBlock' block.
 *
 * @Block(
 *  id = "mouski_block",
 *  admin_label = @Translation("Mouski block"),
 * )
 */
class MouskiBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $connection = \Drupal::database();

    $getMail = $connection->query("SELECT DISTINCT mail FROM {users_field_data}");
	$result = $getMail->fetchAll();


	$block = [
    '#theme' => 'mouski',
    '#attributes' => [
        'class' => ['maclasse'],
        'id' => 'maclasse-block',
      ],
      '#users'  => $result,
      ];

    return $block;
  }

}
