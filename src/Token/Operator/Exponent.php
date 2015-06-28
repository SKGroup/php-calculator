<?php
/**
 * Exponent.php
 * ----------------------------------------------
 *
 *
 * @author      Stanislav Kiryukhin <korsar.zn@gmail.com>
 * @copyright   Copyright (c) 2015, CKGroup.ru
 *
 * ----------------------------------------------
 * All Rights Reserved.
 * ----------------------------------------------
 */
namespace SK\Formuls\Token\Operator;


use SK\Formuls\Token;
use SK\Formuls\Token\Operator;


/**
 * Class Exponent
 * @package SK\Formuls\Token\Operator
 */
class Exponent extends Token implements Token\OperatorInterface
{
	/**
	 * @param mixed $a
	 * @param mixed $b
	 * @return mixed
	 */
	public function execute($a, $b = null)
	{
		return version_compare(PHP_VERSION, '5.6.0') >= 0 ? $a ** $b : pow($a, $b);
	}

	/**
	 * @return self::TYPE_BINARY | self::TYPE_UNARY
	 */
	public function getType()
	{
		return static::TYPE_BINARY;
	}

	/**
	 * @return int
	 */
	public function getPriority()
	{
		return 4;
	}

	/**
	 * @return self::ASSOC_LEFT | self::ASSOC_RIGHT
	 */
	public function getAssociation()
	{
		return static::ASSOC_RIGHT;
	}
}