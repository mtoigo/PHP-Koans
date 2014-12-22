<?php
namespace PHPKoans\Examples;

class Example1
{
	public $name = 'Chapter 1: Variables';

    /**
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $anyVariable
     */
	public function declareAVariable()
	{
        // CODE HERE
		// $anyVariable = true;

		// DO NOT EDIT BELOW
		if (!isset($anyVariable)) {
			throw new \Exception('$anyVariable was not properly declared.');
		}
	}

	public function declareAnInt()
	{
        // CODE HERE
		// $shouldBeAnInt = 2;

		// DO NOT EDIT BELOW
		if (!is_int($shouldBeAnInt)) {
			throw new \Exception('$shouldBeAnInt was not declared as an Integer.');
		}
	}
}
?>