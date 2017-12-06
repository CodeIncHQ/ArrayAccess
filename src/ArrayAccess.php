<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE - CONFIDENTIAL                                |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     05/12/2017
// Time:     10:40
// Project:  lib-arrayaccess
//
namespace CodeInc\ArrayAccess;


/**
 * Class ArrayAccess
 *
 * @package CodeInc\ArrayAccess
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class ArrayAccess extends AbstractArrayAccess {
	/**
	 * @var array
	 */
	protected $array = [];

	/**
	 * ArrayAccess constructor.
	 *
	 * @param array|null $array
	 */
	public function __construct(array $array = null) {
		if ($array !== null) {
			$this->setArray($array);
		}
	}

	/**
	 * @param array $array
	 */
	public function setArray(array $array) {
		$this->array = $array;
	}


	/**
	 * @return array
	 */
	public function getArray():array {
		return $this->array;
	}

	/**
	 * @return array
	 */
	protected function &getAccessibleArray():array {
		return $this->array;
	}
}