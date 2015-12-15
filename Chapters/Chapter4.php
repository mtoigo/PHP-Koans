<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter4 extends Chapter
{
    // Outline
    // X Declare an empty array
    // X Declare an array full of several integers of any length
    // X Pull a single element or two from an array
    // X Remove the first element of an array
    // X Remove the last element of an array
    // X Add an element to the end of an array

    // Get elements 2-4 of an array
    // Sort an array
    // Declare an associative array with the key 'myKey'
    // Pull an element from an array by it's associative key
    // Declare a multi dimensional array
    // Reference an element in the 2nd teir of a multi dimensional array


    /**
     * Exercise 4.1
     *
     * INSTRUCTIONS
     * Declare a variable named $emptyArray that contains an empty array
     */
    public function emptyArray()
    {
        // CODE HERE
        $emptyArray = [];

        // DO NOT EDIT BELOW
        return $emptyArray;
    }

    /**
     * Exercise 4.2
     *
     * INSTRUCTIONS
     * Declare a variable named $sampleArray containing at least two integers
     */
    public function arrayOfIntegers()
    {
        // CODE HERE
        $sampleArray = [3, 6];

        // DO NOT EDIT BELOW
        return $sampleArray;
    }

    /**
     * Exercise 4.3
     *
     * INSTRUCTIONS
     * Assume an array named $sampleArray contains multiple elements and has numeric keys
     * Set the variable $secondElement equal to the 2nd element in $sampleArray
     */
    public function singleElementFromArray($sampleArray)
    {
        // CODE HERE
        $secondElement = $sampleArray[1];

        // DO NOT EDIT BELOW
        return $secondElement;
    }

    /**
     * Exercise 4.4
     *
     * INSTRUCTIONS
     * Assume an array named $sampleArray contains multiple elements and has numeric keys
     * Modify $sampleArray so that the first element is removed
     */
    public function removeFirstElement($sampleArray)
    {
        // CODE HERE
        array_shift($sampleArray);

        // DO NOT EDIT BELOW
        return $sampleArray;
    }

    /**
     * Exercise 4.5
     *
     * INSTRUCTIONS
     * Assume an array named $sampleArray contains multiple elements and has numeric keys
     * Modify $sampleArray so that the last element is removed
     */
    public function removeLastElement($sampleArray)
    {
        // CODE HERE
        array_pop($sampleArray);

        // DO NOT EDIT BELOW
        return $sampleArray;
    }

    /**
     * Exercise 4.6
     *
     * INSTRUCTIONS
     * Assume an array named $sampleArray contains multiple elements and has numeric keys
     * Add the integer 7 to the end of $sampleArray
     */
    public function addToEndOfArray($sampleArray)
    {
        // CODE HERE
        $sampleArray[] = 7;

        // DO NOT EDIT BELOW
        return $sampleArray;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 4;
        $this->name = 'Arrays';

        $this->exerciseTests = [
            'emptyArray' => function() {
                $result = $this->emptyArray();
                if (!is_array($result)) {
                    throw new \Exception('$emptyArray must be equal to an array');
                }
                if (!empty($result)) {
                    throw new \Exception('$emptyArray must be empty and not contain any elements');
                }
            },
            'arrayOfIntegers' => function() {
                $result = $this->arrayOfIntegers();
                if (count($result) < 2) {
                    throw new \Exception('$sampleArray must contain at least two elements');
                }
                if (!is_int($result[0]) || !is_int($result[1])) {
                    throw new \Exception('$sampleArray must contain at least two integers');
                }
            },
            'singleElementFromArray' => function() {
                if ($this->singleElementFromArray([5,6,7,8,9]) !== 6) {
                    throw new \Exception('$secondElement must be equal to the 2nd element in $sampleArray');
                }
            },
            'removeFirstElement' => function() {
                $result = $this->removeFirstElement([5,6]);
                if (count($result) !== 1 || $result[0] !== 6) {
                    throw new \Exception('$sampleArray must have its first element removed');
                }
            },
            'removeLastElement' => function() {
                $result = $this->removeLastElement([5,6]);
                if (count($result) !== 1 || $result[0] !== 5) {
                    throw new \Exception('$sampleArray must have its last element removed');
                }
            },
            'addToEndOfArray' => function() {
                $result = $this->addToEndOfArray([5,6]);
                if (count($result) !== 3 || $result[2] !== 7) {
                    throw new \Exception('The integer 7 must be added to the end of $sampleArray');
                }
            }
        ];
    }
}
