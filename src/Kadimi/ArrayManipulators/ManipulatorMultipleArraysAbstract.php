<?php

/**
 * Manipulator multiple arrays abstract class.
 *
 * @package kadimi/ak
 */

namespace Kadimi\ArrayManipulators;

use Kadimi\ArrayManipulators\ManipulatorMultipleArraysInterface;

abstract class ManipulatorMultipleArrayAbstract implements ManipulatorMultipleArraysInterface
{
	public static function execute(Array...$arrays)
	{
		return [];
	}
}
