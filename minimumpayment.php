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
 * Implements hook_civicrm_xmlMenu().
 */
function minimumpayment_civicrm_xmlMenu(&$files) {
  _minimumpayment_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 */
function minimumpayment_civicrm_install() {
  return _minimumpayment_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 */
function minimumpayment_civicrm_uninstall() {
  return _minimumpayment_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 */
function minimumpayment_civicrm_enable() {
  return _minimumpayment_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 */
function minimumpayment_civicrm_disable() {
  return _minimumpayment_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 */
function minimumpayment_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _minimumpayment_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function minimumpayment_civicrm_managed(&$entities) {
  return _minimumpayment_civix_civicrm_managed($entities);
}
