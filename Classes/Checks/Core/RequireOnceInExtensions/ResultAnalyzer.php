<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Steffen Ritter, rs websystems (steffen.ritter@typo3.org)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class Tx_Smoothmigration_Checks_Core_RequireOnceInExtensions_ResultAnalyzer
 *
 * @author Steffen Ritter
 */
class Tx_Smoothmigration_Checks_Core_RequireOnceInExtensions_ResultAnalyzer implements Tx_Smoothmigration_Domain_Interface_CheckResultAnalyzer {

	/**
	 * @var Tx_Smoothmigration_Checks_Core_RequireOnceInExtensions_Definition
	 */
	protected $parentCheck;

	/**
	 * @param Tx_Smoothmigration_Domain_Interface_Check $check
	 */
	public function __construct(Tx_Smoothmigration_Domain_Interface_Check $check) {
		$this->parentCheck = $check;
	}


	/**
	 * @param Tx_Smoothmigration_Domain_Model_Issue $issue
	 *
	 * @return string
	 */
	public function getSeverity(Tx_Smoothmigration_Domain_Model_Issue $issue) {
		return 0;
	}

	/**
	 * @param Tx_Smoothmigration_Domain_Model_Issue $issue
	 *
	 * @return string
	 */
	public function getExplanation(Tx_Smoothmigration_Domain_Model_Issue $issue) {
		return 'Jo ne: noch keine Beschreibung';
	}

	/**
	 * @param Tx_Smoothmigration_Domain_Model_Issue $issue
	 *
	 * @return string
	 */
	public function getSolution(Tx_Smoothmigration_Domain_Model_Issue $issue) {
		return 'Remove the ' . $issue->getLocation()->getMatchedString() . ' statement at ' . $issue->getLocation()->getFilePath() . ' in line ' . $issue->getLocation()->getLineNumber();
	}

	/**
	 * @param Tx_Smoothmigration_Domain_Model_Issue $issue
	 *
	 * @return string
	 */
	public function getRawTextForCopyPaste(Tx_Smoothmigration_Domain_Model_Issue $issue) {
		return '';
	}


}

?>