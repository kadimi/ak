<?php

/**
 * Manipulator abstract class.
 *
 * @package kadimi/ak
 */

namespace Kadimi\ArrayManipulators;

/**
 * 
 */
class Randomizer extends ManipulatorSingleArrayAbstract
{
	public static function execute(Array $array)
	{
		return array_rand($array);
	}
}
