<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011, ETES GmbH 2010, Andreas Schempp 2008-2009
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 */


/**
 * Class ModuleLoginRedirect
 */
class ModuleLoginRedirect extends Module
{
	/**
	 * Module does not output anything...
	 * Redirect if the user is logged in
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### LOGIN REDIRECT ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script . '?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		
		// If user is logged in, redirect him
		if (FE_USER_LOGGED_IN && !BE_USER_LOGGED_IN)
		{
			global $objPage;
			
			if ($objPage->id != $this->jumpTo)
			{
				$this->jumpToOrReload($this->jumpTo);
			}
		}
		
		return '';
	}


	/**
	 * Not in use, but must be declared because parent method is abstract
	 */
	protected function compile() {}
}

