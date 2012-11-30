<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011, ETES GmbH 2010, Andreas Schempp 2008-2009
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 */


/**
 * Class ModuleNonSslRedirect
 */
class ModuleNonSslRedirect extends Module
{
	/**
	 * Module does not output anything...
	 * Redirect if the page is using ssl
	 *
	 * @return string
	 */
	public function generate ()
	{
		if (TL_MODE == 'BE') 
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### NON-SSL REDIRECT ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script . '?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		elseif ($this->Environment->ssl && (!$this->membersOnly || ($this->membersOnly && FE_USER_LOGGED_IN))) 
		{
        	$url = 'http://' . 
        	(
        		strlen($this->redirectDomain) ? $this->redirectDomain : $_SERVER['HTTP_HOST']
			) . $_SERVER['REQUEST_URI'];
        	
        	// Anything already sent?
        	if (!headers_sent())
        	{
        		$this->redirect($url);
        	}
        	else
		  	{
		  		die('<html><head><meta http-equiv="refresh" content="0; url='.$url.'"></head><body></body></html>');
		  	}
		}
		
		return '';
	}
	
	
	/**
	 * Not in use, but must be declared because parent method is abstract
	 */
	protected function compile () {}
}

