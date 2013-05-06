<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package News
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
 'ModuleBrowserRedirect' => 'system/modules/redirect/ModuleBrowserRedirect.php',
 'ModuleLoginRedirect' => 'system/modules/redirect/ModuleLoginRedirect.php',
 'ModuleNonSslRedirect' => 'system/modules/redirect/ModuleNonSslRedirect.php',
 'ModuleOsRedirect' => 'system/modules/redirect/ModuleOsRedirect.php',
 'ModuleSslRedirect' => 'system/modules/redirect/ModuleSslRedirect.php',
));
