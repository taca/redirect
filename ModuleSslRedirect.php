<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011, ETES GmbH 2010, Andreas Schempp 2009, CustomSoft 2008
 * @author     Jan Theofel <jan@theofel.de>, Eric Bartels <e.bartels@customsoft.de>, Andreas Schempp <andreas@schempp.ch>, Christoph Wiechert <christoph.wiechert@4wardmedia.de>, Jan Theofel <jan.theofel@etes.de>
 * @license    LGPL
 */

/**
 * Module to redirect a page when its not viewed over a secured connection
 */
class ModuleSslRedirect extends Module 
{
	/**
	 * Generate the module (init)
	 *
	 * @return string
	 */
	public function generate ()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### SSL REDIRECT ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script . '?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		elseif (!$this->Environment->ssl && (!$this->membersOnly || ($this->membersOnly && FE_USER_LOGGED_IN))) 
		{
			// Redirect to secure connection (beware of rewrite) and check if there
			// is a custom domain specified for secure connections
        	$url = 'https://' . 
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
	 * Compile. Needs to be implemented!
	 */
	protected function compile () {}
}

