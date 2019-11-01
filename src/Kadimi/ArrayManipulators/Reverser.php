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
class Reverser extends ManipulatorSingleArrayAbstract
{
	public static function execute(Array $array)
	{
		return array_reverse($array);
	}
}
