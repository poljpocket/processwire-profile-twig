<?php namespace ProcessWire;

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 * 
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so
 * that it cannot be seen by other users on the system. For more information, please
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 * 
 * This file is licensed under the MIT license
 * https://processwire.com/about/license/mit/
 *
 * ProcessWire 3.x, Copyright 2023 by Ryan Cramer
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/** @var Config $config */

/*** SITE CONFIG *************************************************************************/

$config->prependTemplateFile = '_twigInit.php';
$config->appendTemplateFile = '_twigRender.php';
$config->templateCompile = false;

$config->statusFiles = array(
    'boot' => '',
    'initBefore' => '',
    'init' => '',
    'readyBefore' => '',
    'ready' => '',
    'readySite' => 'readySite.php',
    'readyAdmin' => '',
    'render' => '',
    'download' => '',
    'finished' => '',
    'failed' => '',
);

$config->set('twigDirectory', $config->paths->templates . 'views');

/*** INSTALLER CONFIG ********************************************************************/
