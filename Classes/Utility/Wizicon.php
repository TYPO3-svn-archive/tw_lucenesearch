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

/**
 * New content element wizard icon and description
 *
 * @package		tw_lucenesearch
 * @copyright	Copyright © 2012 tollwerk® GmbH (http://tollwerk.de)
 * @author		Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>
 */
class Tx_Twlucenesearch_Wizicon {
	
	/**
	 * Main method
	 * 
	 * @param array $wizardItems				Wizard items
	 * @return array							Extended wizard items
	 */
	function proc($wizardItems)	{
		$LL												= $this->includeLocalLang();
		$wizardItems['plugins_tx_twlucenesearch_pi1']	= array(
			'icon'										=> t3lib_extMgm::extRelPath('tw_lucenesearch').'/Resources/Public/Icons/Wizicon.gif',
			'title'										=> $GLOBALS['LANG']->getLLL('wizicon.title', $LL),
			'description'								=> $GLOBALS['LANG']->getLLL('wizicon.description', $LL),
			'params'									=> '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=twlucenesearch_lucene'
		);
		return $wizardItems;
	}

	/**
	 * Includes the language file and returns the found language labels
	 *
	 * @return array							Language labels
	 */
	function includeLocalLang()	{
		return t3lib_div::readLLXMLfile(t3lib_extMgm::extPath('tw_lucenesearch', 'Resources'.DIRECTORY_SEPARATOR.'Private'.DIRECTORY_SEPARATOR.'Language'.DIRECTORY_SEPARATOR.'locallang.xml'), $GLOBALS['LANG']->lang);
	}
}

if (defined('TYPO3_MODE') && $GLOBALS['$TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/tw_lucenesearch/Classes/Utility/Wizicon.php']) {
	include_once($GLOBALS['$TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/tw_lucenesearch/Classes/Utility/Wizicon.php']);
}