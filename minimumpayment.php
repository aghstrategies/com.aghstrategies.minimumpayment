<?php

require_once 'minimumpayment.civix.php';

/**
 * Implementation of hook_civicrm_validateForm
 */
function minimumpayment_civicrm_validateForm( $formName, &$fields, &$files, &$form, &$errors ) {
  if ($formName=='CRM_Contribute_Form_Contribution_Main'){
//    CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.minimumpayment', 'validate.js');
   // $errors['minium_payment']  = ts('Minimum payment is $100');
    //print_r($form);
    //print_r($errors);
    // return;

  }
}
/**
 * Implementation of hook_civicrm_buildForm
 */
function minimumpayment_civicrm_buildForm( $formName, &$form ) {
  if ($formName=='CRM_Contribute_Form_Contribution_Main'){
     if ($form->_id==54){

    CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.minimumpayment', 'minimum.js');
    }
  }
}


/**
 * Implementation of hook_civicrm_config
 */
function minimumpayment_civicrm_config(&$config) {
  _minimumpayment_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function minimumpayment_civicrm_xmlMenu(&$files) {
  _minimumpayment_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function minimumpayment_civicrm_install() {
  return _minimumpayment_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function minimumpayment_civicrm_uninstall() {
  return _minimumpayment_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function minimumpayment_civicrm_enable() {
  return _minimumpayment_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function minimumpayment_civicrm_disable() {
  return _minimumpayment_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function minimumpayment_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _minimumpayment_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function minimumpayment_civicrm_managed(&$entities) {
  return _minimumpayment_civix_civicrm_managed($entities);
}
