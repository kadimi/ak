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
class Combiner extends ManipulatorMultipleArrayAbstract
{
	public static function execute(Array...$arrays)
	{
		return call_user_func_array('array_combine', $arrays);
	}
}
