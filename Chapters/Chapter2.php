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
     * Assume the variables $valueOne and $valueTwo exist as positive integers. Set $sum to the result of adding them both together
     * If $valueOne is 5 and $valueTwo is 6 then $sum should equal 11
     */
    public function addition($valueOne, $valueTwo)
    {
        // CODE HERE
        $sum = $valueOne + $valueTwo;

        // DO NOT EDIT BELOW
        return $sum;
    }

    /**
     * Exercise 2.2
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne and $valueTwo exist as positive integers. Set $difference to
     * the result of subtracing $valueTwo from $valueOne.
     * If $valueOne is 20 and $valueTwo is 6, $difference should be 14
     */
    public function subtraction($valueOne, $valueTwo)
    {
        // CODE HERE
        $difference = $valueOne - $valueTwo;

        // DO NOT EDIT BELOW
        return $difference;
    }

    /**
     * Exercise 2.3
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne is a positive integer. Set the variable $fourTimes to $valueOne times 4.
     * If $valueOne was 5, $fourTimes should end up being 20
     */
    public function multiplication($valueOne)
    {
        // CODE HERE
        $fourTimes = $valueOne * 4;

        // DO NOT EDIT BELOW
        return $fourTimes;
    }

    /**
     * Exercise 2.4
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne is a positive integer. Set the variable $oneFourth to $valueOne divided by 4
     */
    public function division($valueOne)
    {
        // CODE HERE
        $oneFourth = $valueOne / 4;

        // DO NOT EDIT BELOW
        return $oneFourth;
    }

    /**
     * Exercise 2.5
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne is a positive integer. Set the variable $remainder
     * to the remainder when dividing $valueOne by 5.
     */
    public function modulus($valueOne)
    {
        // CODE HERE
        $remainder = $valueOne % 5;

        // DO NOT EDIT BELOW
        return $remainder;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 2;
        $this->name = 'Math';

        $this->exerciseTests = [
            'addition' => function () {
                if ($this->addition(22, 10) !== 32) {
                    throw new \Exception('$sum is not equal to the sum of $valueOne and $valueTwo');
                }
            },
            'subtraction' => function () {
                if ($this->subtraction(22, 10) !== 12) {
                    throw new \Exception('$difference is not equal to $valueTwo subtracted from $valueOne');
                }
            },
            'multiplication' => function () {
                if ($this->multiplication(6) !== 24) {
                    throw new \Exception('$fourTimes is not equal to $valueOne times 4');
                }
            },
            'division' => function () {
                if ($this->division(36) !== 9) {
                    throw new \Exception('$oneFourth is not equal to $valueOne divided by 4');
                }
            },
            'modulus' => function () {
                if ($this->modulus(43) !== 3) {
                    throw new \Exception('$remainder is not equal to the remainder when dividing $valueOne by 5');
                }
            },
        ];
    }
}
