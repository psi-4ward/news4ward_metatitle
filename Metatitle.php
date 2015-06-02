<?php

/**
 * @copyright 4ward.media 2013 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

namespace Psi\News4ward;

class Metatitle extends \System
{

	public function setMetatitle($obj, $article, $objTemplate)
	{
		if(strpos(get_class($obj), 'News4ward\Module\Reader') === false) return;
		$GLOBALS['objPage']->pageTitle = $article['metatitle'];
	}
}
