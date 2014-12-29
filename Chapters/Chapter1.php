<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter1 extends Chapter
{
    /**
     * Exercise 1.1
     *
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $anyVariable
     */
    public function declareAVariable()
    {
        // CODE HERE
        $anyVariable = true;

        // DO NOT EDIT BELOW
        if (!isset($anyVariable)) {
            throw new \Exception('$anyVariable was not properly declared.');
        }
    }

    /**
     * Exercise 1.2
     *
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $shouldBeAnInt that contains an integer value
     */
    public function declareAnInt()
    {
        // CODE HERE
        $shouldBeAnInt = 2;

        // DO NOT EDIT BELOW
        if (!is_int($shouldBeAnInt)) {
            throw new \Exception('$shouldBeAnInt was not declared as an integer.');
        }
    }

    /**
     * Exercise 1.3
     *
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $shouldBeAFloat that contains a float
     */
    public function declareAFloat()
    {
        // CODE HERE
        $shouldBeAFloat = 22.34;

        // DO NOT EDIT BELOW
        if (!is_float($shouldBeAFloat)) {
            throw new \Exception('$shouldBeAFloat was not declared as an float.');
        }
    }

    /**
     * Exercise 1.4
     *
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $shouldBeABoolean with a value of true
     */
    public function declareABoolean()
    {
        // CODE HERE
        $shouldBeABoolean = true;

        // DO NOT EDIT BELOW
        if ($shouldBeABoolean !== true) {
            throw new \Exception('$shouldBeABoolean does not contain the value true.');
        }
    }

    /**
     * Exercise 1.5
     *
     * INSTRUCTIONS
     * Change the value of $shouldBeNull to a non null value at CODE HERE
     */
    public function setNull()
    {
        $shouldBeNull = 27;

        // CODE HERE
        $shouldBeNull = null;

        // DO NOT EDIT BELOW
        if (!is_null($shouldBeNull)) {
            throw new \Exception('$shouldBeNull is not equal to null.');
        }
    }

    /**
     * Exercise 1.6
     *
     * INSTRUCTIONS
     * Cast $becomesABoolean so that it is converted to a boolean value at CODE HERE
     */
    public function variableCasting()
    {
        $becomesABoolean = 1;

        // CODE HERE
        $becomesABoolean = (bool) $becomesABoolean;

        // DO NOT EDIT BELOW
        if ($becomesABoolean !== true) {
            throw new \Exception('$becomesABoolean must be cast to a boolean.');
        }
    }

    /**
     * Exercise 1.7
     *
     * INSTRUCTIONS
     * A variable named $alreadySet exists. Assign it's value to a new variable named $copiedValue.
     */
    public function variableAssignment($alreadySet)
    {
        // CODE HERE
        $copiedValue = $alreadySet;

        // DO NOT EDIT BELOW
        if ($copiedValue !== 'example string') {
            throw new \Exception('$copiedValue must contain the value of $alreadySet');
        }
    }

    /**
     * Exercise 1.8
     *
     * INSTRUCTIONS
     * Declare a constant named SAMPLE_CONSTANT with a string value of 'testing'
     */
    public function declaringConstants()
    {
        // CODE HERE
        define('SAMPLE_CONSTANT', 'testing');

        // DO NOT EDIT BELOW
        if (SAMPLE_CONSTANT !== 'testing') {
            throw new \Exception('Constants SAMPLE_CONSTANT must equal \'testing\'');
        }
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 1;
        $this->name = 'Variables';

        $this->exerciseTests = [
            'variableAssignment' => function () {
                $this->variableAssignment('example string');
            },
        ];
    }
}
