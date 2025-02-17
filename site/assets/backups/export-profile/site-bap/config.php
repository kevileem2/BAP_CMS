<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire.
 * This config.php file was generated by the ProcessExportProfile module. 
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 
 * Copyright (C) 2017 by Ryan Cramer
 * Licensed under MPL 2.0
 *
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = true;

$config->prependTemplateFile = '_init.php';
$config->useFunctionsAPI = true; 
$config->tableSalt = '4ef727fd9342dafff26200274947a703ea4714be'; 
$config->defaultAdminTheme = 'AdminThemeUikit';


/*** INSTALLER CONFIG ********************************************************************/


