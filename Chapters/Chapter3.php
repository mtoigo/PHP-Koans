<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter3 extends Chapter
{
    /**
     * Exercise 3.1
     *
     * INSTRUCTIONS
     * Assume $valueOne and $valueTwo are each strings. Create a variable named $valueThree that is equal to
     * $valueTwo append after $valueOne. For example if $valueOne=cat and $valueTwo=dog $valueThree=catdog
     */
    public function concatenation($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $valueThree;
    }

    /**
     * Exercise 3.2
     *
     * INSTRUCTIONS
     * Assume $valueOne = 'Hello my friend %s' Set the value of $valueTwo to 'Hello my friend Susan'.
     * You'll need to replace the %s with the string susan. HINT: Look at how the sprintf() function works
     */
    public function substitution($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $valueTwo;
    }

    /**
     * Exercise 3.3
     *
     * INSTRUCTIONS
     * Assume $valueOne = 'Coding is relaxing after a long day.' Set $valueTwo to the same string with the word
     * 'relaxing' replaced with 'educational'.
     */
    public function replacement($valueOne)
    {
        // CODE HERE

        // DO NOTE EDIT BELOW
        return $valueTwo;
    }

    /**
     * Exercise 3.4
     *
     * INSTRUCTIONS
     * Assume $valueOne is a string of an unknown length. Set $valueTwo to an integer that is a count of how many characters
     * are in $valueOne. For example if $valueOne = 'potatoes' then $valueTwo = 8
     */
    public function length($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $valueTwo;
    }

    /**
     * Exercise 3.5
     *
     * INSTRUCTIONS
     * Assume $valueOne is an unknown string. Set $valueTwo to the 3rd character in the string. For example if
     * $valueOne = 'shark' then $valueTwo = 'a'
     */
    public function singleCharacters($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $valueTwo;
    }

    /**
     * Exercise 3.6
     *
     * INSTRUCTIONS
     * Assume $valueOne is a string of unknown length. Define 3 variables
     * $partOne = first 3 characters of $valueOne
     * $partTwo = starting at the 5th character of $valueOne and the four characters after. Total of 5 characters
     * $partThree = last 2 characters of $valueOne
     */
    public function substrings($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return [$partOne, $partTwo, $partThree];
    }

    /**
     * Exercise 3.7
     *
     * INSTRUCTIONS
     * Assume $valueOne is a string. Define 3 variables
     * $allLower = $valueOne, but all characters are lower case
     * $allUpper = $valueOne, but all characters are upper case
     * $firstUpper = $valueOne, but only the first character is upper converted to upper case
     */
    public function changingCase($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return [$allLower, $allUpper, $firstUpper];
    }

    /**
     * Exercise 3.8
     *
     * INSTRUCTIONS
     * Assume $valueOne is a string.
     * Set $foundLocation to the position (integer) where the string 'mountain' occurs inside of $valueOne
     * For example if $valueOne = 'To the mountains', $foundLocation should equal 7
     * Keep in mind that the first character is considered in a position of 0
     */
    public function searching($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $foundLocation;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 3;
        $this->name = 'Strings';

        $this->exerciseTests = [
            'concatenation' => function() {
                if ($this->concatenation('sam', 'harry') !== 'samharry') {
                    throw new \Exception('$valueThree is not equal to $valueTwo appended to $valueOne');
                }
            },
            'substitution' => function() {
                if ($this->substitution('Hello my friend %s') !== 'Hello my friend Susan') {
                    throw new \Exception('$valueTwo is not equal to \'Hello my friend Susan\'');
                }
            },
            'replacement' => function() {
                if ($this->replacement('Coding is relaxing after a long day.') !== 'Coding is educational after a long day.') {
                    throw new \Exception('The word relaxing should be replaced with the word educational in $valueTwo');
                }
            },
            'length' => function() {
                if ($this->length('sunkilmoon') !== 10) {
                    throw new \Exception('$valueTwo should be an integer that reflects the number of characters in $valueOne');
                }
            },
            'singleCharacters' => function() {
                if ($this->singleCharacters('tacos') !== 'c') {
                    throw new \Exception('$valueTwo should be equal to the 3rd character of $valueOne');
                }
            },
            'substrings' => function() {
                $result = $this->substrings('Thanks for wondering how this works.');
                if ($result[0] !== 'Tha') {
                    throw new \Exception('$partOne must be equal to the first 3 characters of $valueOne');
                }
                if ($result[1] !== 'ks fo') {
                    throw new \Exception('$partTwo must be equal to 5 characters starting at the 5th character of $valueOne');
                }
                if ($result[2] !== 's.') {
                    throw new \Exception('$partThree must be equal to the last 2 characters of $valueOne');
                }
            },
            'changingCase' => function() {
                $result = $this->changingCase('sampleCase');
                if ($result[0] !== 'samplecase') {
                    throw new \Exception('$allLower must be equal to $valueOne with all characters lower case');
                }
                if ($result[1] !== 'SAMPLECASE') {
                    throw new \Exception('$allUpper must be equal to $valueOne with all characters upper case');
                }
                if ($result[2] !== 'SampleCase') {
                    throw new \Exception('$firstUpper must be equal to $valueOne with just the first character upper case');
                }
            },
            'searching' => function() {
                if ($this->searching('Biking or skiing in the mountains?') !== 24) {
                    throw new \Exception('$foundLocation should be equal to the postion of \'mountains\' in $valueOne');
                }
            }
        ];
    }
}
