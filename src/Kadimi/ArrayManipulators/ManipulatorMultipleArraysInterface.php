<?php

/**
 * Manipulator multiple arrays interface.
 *
 * @package kadimi/ak
 */

namespace Kadimi\ArrayManipulators;

interface ManipulatorMultipleArraysInterface
{
	public static function execute(Array...$arrays);
}
