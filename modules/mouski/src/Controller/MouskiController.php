<?php

namespace Drupal\mouski\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MouskiController.
 */
class MouskiController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {

    $connection = \Drupal::database();
//$query = $connection->query("SELECT DISTINCT title FROM {node_field_data}");

$query = $connection->query("SELECT DISTINCT title FROM {node_field_data} WHERE type= 'artiste'");
$result = $query->fetchAll();


//dump($result);die;
return $result;
  }

}
