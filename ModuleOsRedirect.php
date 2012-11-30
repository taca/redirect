<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2012
 * @author     Jan Theofel <jan@theofel.de>
 * @license    LGPL
 */

class ModuleOsRedirect extends Module
{

	// only output in the backend, in the frontend only redirects
	public function generate()
	{
		global $objPage;

		if (TL_MODE == 'BE')
		{
			$this->loadLanguageFile('tl_module');	
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### OS DETECT REDIRECT ###';
			$objTemplate->wildcard .= '<br />OS: '.$GLOBALS['TL_LANG']['tl_module']['osredirectList'][$this->osredirect];
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script . '?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		
		$this->import('Environment');

		// redirect if correct os type is detected
		if ($this->Environment->agent->os == $this->osredirect)
		{
			if($this->externalredirecturl)
			{
				$url = $this->externalredirecturl;
			}
			else
			{
				$objJump = $this->getPageDetails($this->jumpTo);
				$jumpPage = $this->generateFrontendUrl(array('id'=>$objJump->id, 'alias'=>$objJump->alias));
				$url = 'http://' . $objJump->domain . '/'.$jumpPage;
			}
			
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


	// unused, but needed due to parent class
	protected function compile() {}
}

