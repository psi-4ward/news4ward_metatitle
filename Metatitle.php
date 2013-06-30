<?php

/**
 * @copyright 4ward.media 2013 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

namespace Psi\News4ward;

class Metatitle extends \System
{

	public function setMetatitle($obj, $objArticles, $objTemplate)
	{
		if(strpos(get_class($obj), 'News4ward\Module\Listing') === false) return;
		$GLOBALS['objPage']->pageTitle = $objArticles->metatitle;
	}
}
