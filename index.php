<?php

namespace Kadimi\AK;

/**
 * Single array manipulators.
 */
use Kadimi\ArrayManipulators\Randomizer;
use Kadimi\ArrayManipulators\Reverser;

/**
 * Multiple arrays manipulators.
 */
use Kadimi\ArrayManipulators\Combiner;
use Kadimi\ArrayManipulators\Intersector;
use Kadimi\ArrayManipulators\Merger;

require 'vendor/autoload.php';

/**
 * Test data.
 */
$array_1 = ['a', 'b'];
$array_2 = ['b', 'c'];

/**
 * Testing single array manipulators.
 */
$single = [
	'Randomizer',
	'Reverser',
];

array_walk($single, function($manipulator) use( $array_1) {
	$callback = sprintf('Kadimi\ArrayManipulators\%s::execute', $manipulator);
	
	echo "\n";
	echo "=== $manipulator ===\n";

	var_dump(call_user_func($callback, $array_1));
});

/**
 * Testing multiple array manipulators.
 */
$multiple = [
	'Combiner',
	'Intersector',
	'Merger',
];

array_walk($multiple, function($manipulator) use( $array_1, $array_2) {
	$callback = sprintf('Kadimi\ArrayManipulators\%s::execute', $manipulator);
	
	echo "\n";
	echo "=== $manipulator ===\n";

	var_dump(call_user_func($callback, $array_1, $array_2));
});
