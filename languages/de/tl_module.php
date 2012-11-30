<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, ETES GmbH 2010, Andreas Schempp 2009
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 */
 

// field list
$GLOBALS['TL_LANG']['tl_module']['redirectDomain']			= array('Weiterleitungs-Domain', 'Wenn Sie auf eine andere Domain weiterleiten wollen, geben Sie diese hier an (z.B. ssl.example.com). Andernfalls lassen Sie dieses Feld leer.');
$GLOBALS['TL_LANG']['tl_module']['membersOnly']				= array('Nur Mitglieder', 'Leitet nur dann um, wenn ein Mitglied angemeldet ist.');
$GLOBALS['TL_LANG']['tl_module']['browser']					= array('Browser wählen', 'Hier bitte den Browser auswählen oder "manuell" für eigene RegEx auf den userAgent des Brwosers.');
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatch']		= array('Browserversion wählen', 'Vergleichsoperator für die Browserversion');
$GLOBALS['TL_LANG']['tl_module']['browserRgxp']				= array('Regulärer Ausdruck für UserAgent-Kennung', 'Wenn oben eine manuelle Erkennung konfiguriert ist, hier bitte einen regulären Ausdruck eintragen, der gegen den HTTP_USER_AGENT des Webbrowsers geprüft wird. Delimeter werden automatisch ergänzt.');
$GLOBALS['TL_LANG']['tl_module']['browserVersion']			= array('Browserversion eingeben', 'Browserversion für oben gewählten Vergleich');
$GLOBALS['TL_LANG']['tl_module']['browserCookie']			= array('Nicht weiterleiten wenn Cookie gesetzt ist', 'Zur einmaligen Weiterleitung kann ein Cookie gesetzt werden. Dessen Name und Wert hier eintragen. Das setzen kann z.B. mittels Erweiterung ce-tracking gesetzt werden.');
$GLOBALS['TL_LANG']['tl_module']['browserCookieName']		= array('Name des Cookies', 'Der Name des Cookies, das die Weiterleitung verhindert.');
$GLOBALS['TL_LANG']['tl_module']['browserCookieValue']		= array('Wert des Cookies', 'Wert des Cookies, der gesetzt sein muss, um die Weiterleitung zu verhindern.');
$GLOBALS['TL_LANG']['tl_module']['osredirect']				= array('OS wählen', 'Hier bitte den Betriebssystem auswählen, das weitergeleitet werden soll.');
$GLOBALS['TL_LANG']['tl_module']['redirectinex']			= array('Weiterleitungsziel wählen', 'Wählen Sie hier, ob auf ein internes oder externes Ziel weitergeleitet werden soll.');
$GLOBALS['TL_LANG']['tl_module']['externalredirecturl']		= array('Externe Weiterleitung', 'Geben Sie hier die komplette externe Adresse (inkl. http://...) ein');


// browser list
$GLOBALS['TL_LANG']['tl_module']['browserList']['custom']		= 'Manuell (RegEx auf UserAgent, siehe unten)';
$GLOBALS['TL_LANG']['tl_module']['browserList']['mobilecontao']	= 'Alle mobilen Endgeräte (Contao-Logik)';
$GLOBALS['TL_LANG']['tl_module']['browserList']['mobile']		= 'Alle mobilen Endgeräte (Modul-Logik)';
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
$GLOBALS['TL_LANG']['tl_module']['browserList']['other']		= 'Sonstige';

// match list
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['any']	= 'jede';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['lt']	= '<';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['le']	= '<=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['eq']	= '=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['ge']	= '>=';
$GLOBALS['TL_LANG']['tl_module']['browserVersionMatchList']['gt']	= '>';

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
$GLOBALS['TL_LANG']['tl_module']['redirectinex']['internal']		= 'Intern (Seite aus Seitenstruktur)';
$GLOBALS['TL_LANG']['tl_module']['redirectinex']['external']		= 'Extern (URL-Eingabe)';
