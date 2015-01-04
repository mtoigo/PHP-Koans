<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter2 extends Chapter
{
    /**
     * Exercise 2.1
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne and $valueTwo exist as positive integers. Set $variableSum to the result of adding them both together
     */
    public function addition($valueOne, $valueTwo)
    {
        // CODE HERE
        $variableSum = $valueOne + $valueTwo;

        // DO NOT EDIT BELOW
        return $variableSum;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 2;
        $this->name = 'Math';

        $this->exerciseTests = [
            'addition' => function () {
                if ($this->addition(22, 10) !== 32) {
                    throw new \Exception('$variableSum is not equal to the sum of $valueOne and $valueTwo');
                }
            },
        ];
    }
}
