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
        $valueThree = $valueOne.$valueTwo;

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
        $valueTwo = sprintf($valueOne, 'Susan');

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
        $valueTwo = str_replace('relaxing', 'educational', $valueOne);

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
        $valueTwo = strlen($valueOne);

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
        $valueTwo = $valueOne[2];

        // DO NOT EDIT BELOW
        return $valueTwo;
    }

    /**
     * Exercise 3.6
     *
     * INSTRUCTIONS
     */
    public function substrings($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW

    }

    /**
     * Exercise 3.7
     *
     * INSTRUCTIONS
     */
    public function changingCase($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW

    }

    /**
     * Exercise 3.8
     *
     * INSTRUCTIONS
     */
    public function searching($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW

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
            }
        ];
    }
}
