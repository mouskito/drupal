<?php

namespace Drupal\simpson\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SimpsonController.
 */
class SimpsonController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    return [
      '#type' => 'markup',
      '#markup' => array('form_promotion', 1),
    ];
  }

  public function form_promotion($form, &$form_state){
  $rand1 = rand(1,20);
  $rand2 = rand(1,20);
  $form['premier_rand'] = array(
    '#type' => 'hidden',
    '#value' => $rand1,
    '#size' => 2,
    '#required' => TRUE,
    );
  $form['deuxieme_rand'] = array(
    '#type' => 'hidden',
    '#value' => $rand2,
    '#size' => 2,
    '#required' => TRUE,
    );

  $form['question'] = array(
    '#type' => 'textfield',
    '#title' => t("Quel est la couleur du cheval blanc d'Henry IV ?"),
    '#default_value' => "",
    '#size' => 60,
    '#maxlength' => 128,
    '#required' => TRUE,
    );
  $form['verification'] = array(
    '#type' => 'textfield',
    '#title' => t($rand1." + ".$rand2." ="),
    '#default_value' => "",
    '#size' => 60,
    '#maxlength' => 128,
    '#required' => TRUE,
    );
  $form['copy'] = array(

  '#type' =>
'checkbox', 

  '#title' => t('Send me a copy.'),

);
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('OK'),
    );
  return $form;
}

public function form_promotion_submit($form, &$form_state){
  $nid = db_insert('resultats_questionnaire')
  ->fields(array(
    'name' => $form_state['build_info']['args']['0'],
    'answer' => $form_state['values']['question'],
    ))
  ->execute();
  drupal_set_message(t('The form has been submitted.'));
}

public function form_promotion_validate($form, &$form_state){
  $wildcard = $form_state['build_info']['args']['0'];
  $query = db_query('SELECT name FROM resultats_questionnaire WHERE name = :wildcard', array(':wildcard' => $wildcard));
  $result = $query->fetchAll();
  if(count($result) > 0){
    form_set_error('error', "Vous avez déjà répondu au questionnaire !");
  } else if($form_state['input']['verification'] != $form_state['input']['premier_rand'] + $form_state['input']['deuxieme_rand']){
    form_set_error('error', "Erreur d'addition");
  }
}

}
