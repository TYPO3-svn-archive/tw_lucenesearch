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

require_once 'Zend/Search/Lucene/Document.php';
require_once 'Zend/Search/Lucene/Search/QueryHit.php';

/**
 * Single search result (query hit)
 *
 * @package		tw_lucenesearch
 * @copyright	Copyright © 2012 tollwerk® GmbH (http://tollwerk.de)
 * @author		Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>
 */
class Tx_TwLucenesearch_Domain_Model_QueryHit extends Zend_Search_Lucene_Search_QueryHit {
	
	/**
	 * Constructor
	 * 
	 * @param Zend_Search_Lucene_Interface $index				Index
	 * @return void
	 */
	public function __construct(Zend_Search_Lucene_Interface $index) {
		$this->_index = $index;
	}
	
	/**
	 * Return the associated index document
	 * 
	 * @return Tx_TwLucenesearch_Domain_Model_Document 			Associated index document
	 * @see Zend_Search_Lucene_Search_QueryHit::getDocument()
	 */
	public function getDocument() {
		if (!($this->_document instanceof Tx_TwLucenesearch_Domain_Model_Document)) {
			$this->_document		= Tx_TwLucenesearch_Domain_Model_Document::cast(parent::getDocument());
		}
		return $this->_document;
	}

	/**
	 * Cast a standard Zend lucene query hit as extended instance
	 * 
	 * @param Zend_Search_Lucene_Search_QueryHit $hit		Query hit
	 * @return Tx_TwLucenesearch_Domain_Model_QueryHit		Extended query hit
	 */
	public static function cast(Zend_Search_Lucene_Search_QueryHit $hit) {
		$extHit				= new self($hit->_index);
		foreach (get_object_vars($hit) as $key => $value) {
			if (($key != '_index') && ($key != '_document')) {
				$extHit->$key	= $value;
			}
		}
		return $extHit;
	}
}

?>