<?php

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, ETES GmbH 2010, Andreas Schempp 2009
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 */


// fields
$GLOBALS['TL_LANG']['tl_module']['redirectDomain']			= array('Redirect Domain', 'If you want to redirect to another domain, please enter the domain here (ex. ssl.example.com). Otherwise leave this field blank.');
$GLOBALS['TL_LANG']['tl_module']['membersOnly']				= array('Only members','Redirects only if a member has logged-in.');
$GLOBALS['TL_LANG']['tl_module']['browser']					= array('Select a browser', 'Select one of the following browsers, or choose custom and enter your own regular expression in the text box below.');
$GLOBALS['TL_LANG']['tl_module']['browserRgxp']				= array('Browser detection regular expression', 'If you have selected a custom browser, you can enter the regular expression here to scan for it in the browser\'s HTTP_USER_AGENT string. De-limeters are added in the module.');
$GLOBALS['TL_LANG']['tl_module']['browserCookie']			= array('Do not redirect if cookie is set', 'If you want to redirect just once you can set a cookie on the target page. Use extension ce-tracking to set the cookie.');
$GLOBALS['TL_LANG']['tl_module']['browserCookieName']		= array('Cookie name', 'Name of the cookie which prevents redirection.');
$GLOBALS['TL_LANG']['tl_module']['browserCookieValue']		= array('Cookie value', 'This cookie value must be set to prevent redirection.');
$GLOBALS['TL_LANG']['tl_module']['osredirect']				= array('Select a OS', 'Select the OS which should get redirected.');
$GLOBALS['TL_LANG']['tl_module']['redirectinex']			= array('Choose target', 'Select which type of redirect to use.');
$GLOBALS['TL_LANG']['tl_module']['externalredirecturl']		= array('URL', 'Insert the externel URL (including http://...) here');

// browser list
$GLOBALS['TL_LANG']['tl_module']['browserList']['custom']		= 'Custom browser expression (see below)';
$GLOBALS['TL_LANG']['tl_module']['browserList']['mobilecontao']	= 'All mobile devices (Contao logic)';
$GLOBALS['TL_LANG']['tl_module']['browserList']['mobile']		= 'All mobile devices (extension logic)';
$GLOBALS['TL_LANG']['tl_module']['browserList']['ie']			= 'Internet Explorer';
$GLOBALS['TL_LANG']['tl_module']['browserList']['iemobile']		= 'IEMobile';
$GLOBALS['TL_LANG']['tl_module']['browserList']['firefox']		= 'Firefox';
$GLOBALS['TL_LANG']['tl_module']['browserList']['chrome']		= 'Chrome';
$GLOBALS['TL_LANG']['tl_module']['browserList']['omniweb']		= 'OmniWeb';
$GLOBALS['TL_LANG']['tl_module']['browserList']['opera']		= 'Opera';
$GLOBALS['TL_LANG']['tl_module']['browserList']['opera-mini']	= 'Opera Mini';
$GLOBALS['TL_LANG']['tl_module']['browserList']['opera-mobile']	= 'Opera Mobile';
$GLOBALS['TL_LANG']['tl_module']['browserList']['camino']		= 'Camino';
$GLOBALS['TL_LANG']['tl_module']['browserList']['konqueror']	= 'Konqueror';
$GLOBALS['TL_LANG']['tl_module']['browserList']['other']		= 'Other';

// match list
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['any']      = 'any';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['lt']       = '<';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['le']       = '<=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['eq']       = '=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['ge']       = '>=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['gt']       = '>';

// os list
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['mac']			= 'Mac OS';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['win-ce']		= 'Windows mobile/CE';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['win']			= 'Windows';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['ios']			= 'iOS (iPhone, iPad, iPod)';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['android']		= 'Android';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['blackberry']	= 'Blackberry';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['symbian']		= 'Symbian';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['webos']			= 'WebOS';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['unix']			= 'Linux, FreeBSD, OpenBSD, NetBSD';
$GLOBALS['TL_LANG']['tl_module']['osredirectList']['other']			= 'Sonstige';

// internal/external list
$GLOBALS['TL_LANG']['tl_module']['redirectinex']['internal']		= 'internal (Contao page)';
$GLOBALS['TL_LANG']['tl_module']['redirectinex']['external']		= 'external (URL)';
