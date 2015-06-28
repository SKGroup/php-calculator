<?php
/**
 * Token.php
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
namespace SK\Formuls;

use SK\Formuls\Token\TokenInterface;

/**
 * Class Token
 * @package SK\Formuls
 */
abstract class Token implements TokenInterface
{
	/**
	 * @var string
	 */
	protected $value;

	/**
	 * @param $value
	 */
	public function __construct($value)
	{
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->getValue();
	}
}