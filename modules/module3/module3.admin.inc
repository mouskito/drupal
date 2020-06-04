<?php

function form_admin_panel($form, &$form_state){
    $form['email'] = array(
  '#type' => 'textfield',
  '#title' => t("Adresse de destination du mail d'avertissement d'un nouvel utilisateur"),
  '#default_value' => variable_get('module3_mail', 'to_address@example.com'),
  '#size' => 60,
  '#maxlength' => 128,
  '#required' => TRUE,
  );
    $form['question'] = array(
  '#type' => 'textfield',
  '#title' => t("Question de verification lors de l'inscription"),
  '#default_value' => variable_get('module3_question', 'Addition de 3 + 9 ?'),
  '#size' => 60,
  '#maxlength' => 128,
  '#required' => TRUE,
  );
    $form['reponse'] = array(
  '#type' => 'textfield',
  '#title' => t("Réponse acceptée pour un scientifique"),
  '#default_value' => variable_get('module3_reponse', '12'),
  '#size' => 60,
  '#maxlength' => 128,
  '#required' => TRUE,
  );
    $form['submit_button'] = array(
    '#type' => 'submit',
    '#value' => t('Sauvegarder'),
  );
    return $form;
}

function form_admin_panel_submit($form, &$form_state){
  variable_set('module3_mail', $form_state['values']['email']);
  variable_set('module3_question', $form_state['values']['question']);
  variable_set('module3_reponse', $form_state['values']['reponse']);
  watchdog('module3', t('Email modified'));
  drupal_set_message('Nouvelle configuration sauvegardee.');
}

function form_admin_panel_validate($form, &$form_state){
  $email = $form_state['values']['email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    form_set_error('error', "Email invalide.");
  }
}