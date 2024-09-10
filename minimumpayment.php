<?php

require_once 'minimumpayment.civix.php';

/**
 * Implements hook_civicrm_buildForm().
 */
function minimumpayment_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main') {
    if ($form->_id == 54) {
      CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.minimumpayment', 'minimum.js');
    }
  }
}

/**
 * Implements hook_civicrm_config().
 */
function minimumpayment_civicrm_config(&$config) {
  _minimumpayment_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 */
function minimumpayment_civicrm_install() {
  return _minimumpayment_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 */
function minimumpayment_civicrm_enable() {
  return _minimumpayment_civix_civicrm_enable();
}

// /**
//  * Implements hook_civicrm_postInstall().
//  *
//  * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
//  */
// function minimumpayment_civicrm_postInstall() {
//   _minimumpayment_civix_civicrm_postInstall();
// }
