<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>, tollwerk® GmbH
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXT']['extParams'][$_EXTKEY] = unserialize($_EXTCONF);

// Service registration
t3lib_extMgm::addService($_EXTKEY, 'index' /* sv type */, 'tx_twlucenesearch_sv' /* sv key */,
	array(
		'title'			=> 'Lucene indexer manager',
		'description'	=> 'Service for building and querying a lucene search index',
		'subtype'		=> 'lucene',
		'available'		=> true,
		'priority'		=> 50,
		'quality'		=> 50,
		'os'			=> '',
		'exec'			=> '',
		'classFile'		=> t3lib_extMgm::extPath($_EXTKEY).'Classes/Service/Lucene.php',
		'className'		=> 'Tx_TwLucenesearch_Service_Lucene',
	)
);

// Search plugin configuration
Tx_Extbase_Utility_Extension::configurePlugin($_EXTKEY, 'Lucene', array('Lucene' => 'search,results,notfound'), array('Lucene' => 'results,notfound'));

// Adding the "Classes" directory to the include path
set_include_path(implode(PATH_SEPARATOR, array_unique(array_merge(array(t3lib_extMgm::extPath($_EXTKEY, 'Classes')), explode(PATH_SEPARATOR, get_include_path())))));

// Indexing hook registration
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][]	= 'EXT:tw_lucenesearch/Classes/Utility/Indexer.php:&Tx_TwLucenesearch_Utility_Indexer->intPages';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all'][]		= 'EXT:tw_lucenesearch/Classes/Utility/Indexer.php:&Tx_TwLucenesearch_Utility_Indexer->noIntPages';

// Rewriting hook provision
if (!array_key_exists('tw_lucenesearch', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch'] = array(
		'search-rewrite-hooks'		=> array(),
		'term-rewrite-hooks'		=> array()
	);
}
if (!array_key_exists('search-rewrite-hooks', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']) || !is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']['search-rewrite-hooks'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']['search-rewrite-hooks']	= array();
}
if (!array_key_exists('term-rewrite-hooks', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']) || !is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']['term-rewrite-hooks'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tw_lucenesearch']['term-rewrite-hooks']		= array();
}

?>