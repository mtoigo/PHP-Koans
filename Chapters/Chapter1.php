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
     * Declare a variable at the top of the function below named $anyVariable with any value.
     */
    public function declareAVariable()
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $anyVariable;
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

        // DO NOT EDIT BELOW
        return $shouldBeAnInt;
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

        // DO NOT EDIT BELOW
        return $shouldBeAFloat;
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

        // DO NOT EDIT BELOW
        return $shouldBeABoolean;
    }

    /**
     * Exercise 1.5
     *
     * INSTRUCTIONS
     * Change the value of $shouldBeNull to a non null value at CODE HERE
     */
    public function setNull($shouldBeNull)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $shouldBeNull;
    }

    /**
     * Exercise 1.6
     *
     * INSTRUCTIONS
     * Cast $becomesABoolean so that it is converted to a boolean value at CODE HERE
     */
    public function variableCasting($becomesABoolean)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $becomesABoolean;
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

        // DO NOT EDIT BELOW
        return $copiedValue;
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
            'declareAVariable' => function () {
                $result = $this->declareAVariable();
                if (!isset($result)) {
                    throw new \Exception('$anyVariable was not properly declared.');
                }
            },
            'declareAnInt' => function () {
                if (!is_int($this->declareAnInt())) {
                    throw new \Exception('$shouldBeAnInt was not declared as an integer.');
                }
            },
            'declareAFloat' => function () {
                if (!is_float($this->declareAFloat())) {
                    throw new \Exception('$shouldBeAFloat was not declared as an float.');
                }
            },
            'declareABoolean' => function () {
                if ($this->declareABoolean() !== true) {
                    throw new \Exception('$shouldBeABoolean does not contain the value true.');
                }
            },
            'setNull' => function () {
                if (!is_null($this->setNull(27))) {
                    throw new \Exception('$shouldBeNull is not equal to null.');
                }
            },
            'variableCasting' => function () {
                if ($this->variableCasting(1) !== true) {
                    throw new \Exception('$becomesABoolean must be cast to a boolean.');
                }
            },
            'variableAssignment' => function () {
                $testVariable = 'example string';
                if ($this->variableAssignment($testVariable) !== $testVariable) {
                    throw new \Exception('$copiedValue must contain the value of $alreadySet');
                }
            },
        ];
    }
}
