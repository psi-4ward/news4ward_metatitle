<?php

/**
 * @copyright 4ward.media 2013 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */
 
$GLOBALS['TL_DCA']['tl_news4ward_article']['fields']['metatitle'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_news4ward_article']['metatitle'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('tl_class'=>'w50'),
	'sql'		=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_news4ward_article']['fields']['description']['eval']['tl_class'] = 'clr';
$GLOBALS['TL_DCA']['tl_news4ward_article']['palettes']['default'] = str_replace('description','metatitle,description', $GLOBALS['TL_DCA']['tl_news4ward_article']['palettes']['default']);
