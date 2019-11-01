<?php

/**
 * Manipulator single array abstract class.
 *
 * @package kadimi/ak
 */

namespace Kadimi\ArrayManipulators;

use Kadimi\ArrayManipulators\ManipulatorSingleArrayInterface;

abstract class ManipulatorSingleArrayAbstract implements ManipulatorSingleArrayInterface
{
	public static function execute(Array $array)
	{
		return [];
	}
}
