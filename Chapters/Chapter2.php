<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

class Chapter2 extends Chapter
{
    public $number = 2;
    public $name = 'Math';

    /**
     * Exercise 2.1
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
     * Exercise 2.2
     *
     * INSTRUCTIONS
     * Declare a variable at the top of the function below named $anyVariable
     */
    public function declareAVariableX()
    {
        // CODE HERE
         $anyVariable = true;

        // DO NOT EDIT BELOW
        if (!isset($anyVariable)) {
            throw new \Exception('$anyVariable was not properly declared.');
        }
    }
}
