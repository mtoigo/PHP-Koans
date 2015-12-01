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

        // DO NOT EDIT BELOW
        return $remainder;
    }

    /**
     * Exercise 2.6
     *
     * INSTRUCTIONS
     * Assume $valueOne and $valueTwo are numbers with an unknown number of decimal places
     * Round $valueOne to the nearest whole number. Round $valueTwo to the nearest hundredth 0.00
     */
    public function rounding($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return [$valueOne, $valueTwo];
    }

    /**
     * Exercise 2.7
     *
     * INSTRUCTIONS
     * Assume $valueOne and $valueTwo are two numbers with an unknown number of decimal places
     * Round $valueOne up to the nearest whole number. Round $valueTwo down to the nearest whole number
     */
    public function roundingUpAndDown($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return [$valueOne, $valueTwo];
    }

    /** Exercise 2.8
     *
     * INSTRUCTIONS
     * Assume $valueOne and $valueTwo are whole numbers;
     * Increment $valueOne using the ++ operator. Decrement (reduce) the value of $valueTwo using the -- operator
     */
    public function incrementAndDecrement($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return [$valueOne, $valueTwo];
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
            'division' => function() {
                if($this->division(36) !== 9) {
                    throw new \Exception('$oneFourth is not equal to $valueOne divided by 4');
                }
            },
            'modulus' => function () {
                if ($this->modulus(43) !== 3) {
                    throw new \Exception('$remainder is not equal to the remainder when dividing $valueOne by 5');
                }
            },
            'rounding' => function() {
                $result = $this->rounding(33.25, 567.948);
                if ($result[0] != 33) {
                    throw new \Exception('$valueOne is not rounded to the nearest whole number');
                }
                if ($result[1] != 567.95) {
                    throw new \Exception('$valueTwo is not rounded to the hundredths place');
                }
            },
            'roundingUpAndDown' => function() {
                $result = $this->roundingUpAndDown(22.25, 28.98);
                if ($result[0] != 23) {
                    throw new \Exception('$valueOne is not rounded up to the nearest whole number');
                }
                if ($result[1] != 28) {
                    throw new \Exception('$valueTwo is not rounded down to the nearest whole number');
                }
            },
            'incrementAndDecrement' => function() {
                $result = $this->incrementAndDecrement(61, 34);
                if ($result[0] != 62) {
                    throw new \Exception('$valueOne is not increased by 1');
                }
                if ($result[1] != 33) {
                    throw new \Exception('$valueTwo is not reduced by 1');
                }
            }
        ];
    }
}
