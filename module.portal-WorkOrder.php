<?php
/**
 * iTop module definition file
 *
 * @copyright   Copyright (C) 2015 ThiagoArcanjo
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
  __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
  'portal-WorkOrder/',
  array(
		// Identification
		//
		'label' => 'Portal Work Order',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.portal-WorkOrder.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);
?>
