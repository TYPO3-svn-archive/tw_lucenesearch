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
 * View helper for setting / altering the index and page title of the current frontend page
 * 
  * = Examples =
 *
 * <code title="Example">
 * <twlucene:index.title title="{article.title}" format="%C - %S: %P"/>
 * </code>
 *
 * Output:
 * None (there lucene indexer will write the appropriate title into the lucene index and the source code)
 * 
 * @package		tw_lucenesearch
 * @copyright	Copyright © 2012 tollwerk® GmbH (http://tollwerk.de)
 * @author		Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>
 */
class Tx_TwLucenesearch_ViewHelpers_Index_TitleViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Set the indexed and page title of the current page
	 * 
	 * @param string $title			User defined page title
	 * @param string $format		Title format with substitution markers (%S = Website title, %P = Page title, %C = User defined title as given in argument 1)
	 * @param string $pageFormat	Optional: Alternative format for page title
	 * @return string				Dummy result string (empty)
	 */
	public function render($title, $format = '%S: %P - %C', $pageFormat = null) {
		Tx_TwLucenesearch_Utility_Indexer::setPageTitle($title, $format, $pageFormat);
		return '';
	}
}

?>
