<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE - CONFIDENTIAL                                |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.co for more information about licensing.  |
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
// Date:     04/12/2017
// Time:     15:55
// Project:  lib-codeinclib
//
namespace CodeInc\ArrayAccess;


/**
 * Trait ArrayAccessTrait
 *
 * @package CodeIncLib\Utils
 * @author Joan Fabrégat <joan@codeinc.fr>
 * @see \ArrayAccess
 */
trait ArrayAccessTrait {
	/**
	 * Returns a pointer to the array accessible via \ArrayAccess.
	 *
	 * @return array
	 */
	abstract protected function &getAccessibleArray():array;

	/**
	 * ArrayAccess method.
	 *
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value) {
		if ($offset === null) {
			$this->getAccessibleArray()[] = $value;
		}
		else {
			$this->getAccessibleArray()[$offset] = $value;
		}
	}

	/**
	 * ArrayAccess method.
	 *
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset):bool {
		return array_key_exists($offset, $this->getAccessibleArray());
	}

	/**
	 * ArrayAccess method.
	 *
	 * @param mixed $offset
	 */
	public function offsetUnset($offset) {
		unset($this->getAccessibleArray()[$offset]);
	}

	/**
	 * ArrayAccess method.
	 *
	 * @param mixed $offset
	 * @return mixed|null
	 */
	public function offsetGet($offset) {
		return $this->offsetExists($offset) ? $this->getAccessibleArray()[$offset] : null;
	}
}