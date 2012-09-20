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

// Plugin registration
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Lucene',
	'LLL:EXT:tw_lucenesearch/Resources/Private/Language/locallang_db.xml:feplugin'
);

// Plugin integration into the backend forms
$pluginSignature															= str_replace('_','',$_EXTKEY).'_lucene';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature]	= 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/ControllerActions.xml');

if (TYPO3_MODE=='BE')	{
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Tx_Twlucenesearch_Wizicon'] = t3lib_extMgm::extPath($_EXTKEY, 'Classes'.DIRECTORY_SEPARATOR.'Utility'.DIRECTORY_SEPARATOR.'Wizicon.php');
}

// Static TypoScript registration
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'tollwerk Lucene search');

// Adding the "Classes" directory to the include path 
set_include_path(implode(PATH_SEPARATOR, array_unique(array_merge(array(t3lib_extMgm::extPath($_EXTKEY, 'Classes')), explode(PATH_SEPARATOR, get_include_path())))));

?>