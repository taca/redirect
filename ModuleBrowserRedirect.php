<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, ETES GmbH 2010, Thyon Design 2009 
 * @author     Jan Theofel <jan@theofel.de>, John Brand <john.brand@thyon.com>
 * @license    LGPL
 */

/**
 * Class ModuleMobileRedirect
 *
 * Front end module "mobile redirect".
 */
class ModuleBrowserRedirect extends Module
{

	/**
	 * Module does not output anything...
	 * Redirect if the browser is matching the one configured
	 * @return string
	 */
	public function generate()
	{
		global $objPage;

		if (TL_MODE == 'BE')
		{
			$this->loadLanguageFile('tl_module');	
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### BROWSER DETECT REDIRECT ###';
			$objTemplate->wildcard .= '<br />Browser: '.$GLOBALS['TL_LANG']['tl_module']['browserList'][$this->browser];
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script . '?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		
		
		// reset blnJump
		$blnJump = false;

		switch ($this->browser)
		{
			case 'mobile':
				$blnJump = $this->checkMobile();
				break;
				
			case 'mobilecontao':
				$this->import('Environment');
				$blnJump = $this->Environment->agent->mobile;
				break;

			case 'custom':
				$blnJump = (strlen($this->browserRgxp) && $this->checkRgxp($this->browserRgxp));
				break;
									
			default:
				$this->import('Environment');
				// check browser 
				$blnJump = ($this->Environment->agent->browser == $this->browser);
				
				// check version if browser matches
				if($blnJump && $this->browserVersionMatch != "any")
				{
					$version = substr($this->Environment->agent->version, 0, strlen($this->browserVersion));
					$cmp = strcmp($version,$this->browserVersion);
					$blnJump = false;
					if($this->browserVersionMatch == "lt")
					{
						$blnJump = $cmp < 0;
					} 
					if($this->browserVersionMatch == "le")
					{
						$blnJump = $cmp <= 0;
					} 
					if($this->browserVersionMatch == "eq")
					{
						$blnJump = $cmp == 0;
					} 
					if($this->browserVersionMatch == "ge")
					{
						$blnJump = $cmp >= 0;
					} 
					if($this->browserVersionMatch == "gt")
					{
						$blnJump = $cmp > 0;
					} 
				}
		}

		// check for alternative cookie
		if($blnJump && $this->browserCookie)
		{
			$blnJump = !($this->Input->cookie($this->browserCookieName) == $this->browserCookieValue);
		}
		
		// redirect if correct browser type is detected
		if ($blnJump)
		{
			$objJump = $this->getPageDetails($this->jumpTo);
			$jumpPage = $this->generateFrontendUrl(array('id'=>$objJump->id, 'alias'=>$objJump->alias));

			if (strlen($objJump->domain) && $objJump->domain !== $objPage->domain)
			{
			  	$url = 'http://' . $objJump->domain . '/'.$jumpPage;
	    	
			  	// Anything already sent
			  	if (!headers_sent()) 
			  	{
			  		$this->redirect($url);
			  	}
			  	else
			  	{
			  		die('<html><head><meta http-equiv="refresh" content="0; url='.$url.'"></head><body></body></html>');
			  	}
			}
			else
			{
				$this->jumpToOrReload($this->jumpTo);
			}

		}

		return '';
	}


	// Not in use, but must be declared because parent method is abstract
	protected function compile() {}

	// Detects a Mobile Device, own logic, @return boolean
	protected function checkMobile() 
	{
		if (isset($_SERVER["HTTP_X_WAP_PROFILE"]))
		{
			return true;
		}
		
		if (preg_match("/wap\.|\.wap/i", $_SERVER["HTTP_ACCEPT"]))
		{
			return true;
		}
		
		if (isset($_SERVER["HTTP_USER_AGENT"]))
		{
		
			if (preg_match("/Creative\ AutoUpdate/i", $_SERVER["HTTP_USER_AGENT"]))
			{ 
				return false;
			}
			
			$uamatches = array("midp", "j2me", "avantg", "docomo", "novarra", "palmos", "palmsource", "240x320", "opwv", "chtml", "pda", "windows\ ce", "mmp\/", "blackberry", "mib\/", "symbian", "wireless", "nokia", "hand", "mobi", "phone", "cdm", "up\.b", "audio", "SIE\-", "SEC\-", "samsung", "HTC", "mot\-", "mitsu", "sagem", "sony", "alcatel", "lg", "erics", "vx", "NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch", "rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi", "bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo", "sgh", "gradi", "jb", "\d\d\di", "moto", "iphone", "ipod");
			
			foreach ($uamatches as $uastring)
			{
				if (preg_match("/".$uastring."/i",$_SERVER["HTTP_USER_AGENT"])) 
				{
					return true;
				}
			}
		
		}

		// not a mobile device
		return false;
	}

	/**
	 * Detects custom UA string
	 * @param string $rgxp
	 * @return boolean
	 */
	protected function checkRgxp($rgxp) 
	{
		return (isset($_SERVER["HTTP_USER_AGENT"]) && preg_match($rgxp,$_SERVER["HTTP_USER_AGENT"]));
	}
}

