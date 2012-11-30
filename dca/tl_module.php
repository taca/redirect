<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, Andreas Schempp 2009
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 */


/**
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][]			= 'browser';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][]			= 'browserVersionMatch';

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][]			= 'browserCookie';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['browserCookie']			= 'browserCookieName,browserCookieValue';

// palettes for SSL redirects
$GLOBALS['TL_DCA']['tl_module']['palettes']['sslRedirect']				= '{title_legend},name,type;{redirect_legend},redirectDomain;{protected_legend:hide},membersOnly,guests,protected';

// palettes for Non-SSL redirects
$GLOBALS['TL_DCA']['tl_module']['palettes']['nonSslRedirect']			= '{title_legend},name,type;{redirect_legend},redirectDomain;{protected_legend:hide},membersOnly,guests,protected';

// palettes for members which are logged in
$GLOBALS['TL_DCA']['tl_module']['palettes']['loginRedirect']			= '{title_legend},name,type;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';

// palettes for browser switches
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirect']			= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirectcustom']		= '{title_legend},name,type;{config_legend},browser,browserRgxp,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirectlt']		= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserVersion,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirectle']		= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserVersion,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirecteq']		= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserVersion,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirectge']		= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserVersion,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['browserRedirectgt']		= '{title_legend},name,type;{config_legend},browser,browserVersionMatch,browserVersion,browserCookie;{redirect_legend},jumpTo;{protected_legend:hide},guests,protected';

// palettes for os redirects
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][]			= 'redirectinex';
$GLOBALS['TL_DCA']['tl_module']['palettes']['osRedirect']				= '{title_legend},name,type;{config_legend},osredirect;{redirect_legend},redirectinex,externalredirecturl,jumpTo;{protected_legend:hide},guests,protected';

// field definitions
$GLOBALS['TL_DCA']['tl_module']['fields']['redirectDomain'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['redirectDomain'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'eval'			=> array('maxlength'=>255, 'rgxp'=>'url', 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browser'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browser'],
	'inputType'		=> 'select',
	'exclude'		=> true,
	'options'		=> array('mobilecontao','mobile','ie','iemobile','firefox','chrome','omniweb','opera','opera-mini','opera-mobile','camino','konqueror','other','custom'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_module']['browserList'],
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'clr'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserVersionMatch'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserVersionMatch'],
	'inputType'		=> 'select',
	'exclude'		=> true,
	'options'		=> array('any','lt','le','eq','ge','gt'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList'],
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'clr'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserRgxp'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserRgxp'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'eval'			=> array('tl_class'=>'long', 'decodeEntities'=>true),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserVersion'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserVersion'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'eval'			=> array('maxlength'=>10, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['membersOnly'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['membersOnly'],
	'inputType'		=> 'checkbox',
	'exclude'		=> true,
	'eval'			=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserCookie'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserCookie'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserCookieName'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserCookieName'],
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true,'maxlength'=>255,'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['browserCookieValue'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['browserCookieValue'],
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true,'maxlength'=>255,'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['osredirect'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['osredirect'],
	'inputType'		=> 'select',
	'exclude'		=> true,
	'options'		=> array('mac','win-ce','win','ios','android','blackberry','symbian','webos','unix','other'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_module']['osredirectList'],
	'eval'			=> array('tl_class'=>'clr'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['redirectinex'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['redirectinex'],
	'inputType'		=> 'select',
	'exclude'		=> true,
	'options'		=> array('internal','external'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_module']['redirectinex'],
	'eval'			=> array('tl_class'=>'clr'), // 'submitOnChange'=>true, 
);

$GLOBALS['TL_DCA']['tl_module']['fields']['externalredirecturl'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['externalredirecturl'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'eval'			=> array('tl_class'=>'long','maxlength'=>255, 'rgxp'=>'url', 'decodeEntities'=>true),
);
