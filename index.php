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
 * Manual test.
 */
var_dump([
	'Randomizer' => Randomizer::execute($array_1),
	'Reverser' => Reverser::execute($array_1),
]);
var_dump([
	'Combiner' => Combiner::execute($array_1, $array_2),
	'Intersector' => Intersector::execute($array_1, $array_2),
	'Merger' => Merger::execute($array_1, $array_2),
]);