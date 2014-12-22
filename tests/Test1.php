<?php
namespace PHPKoans\Tests;

use PHPKoans\Examples\Example1 as Example1;

// TODO - set this up without PHPUnit, where when you instantiate it runs everything as it should
class Test1 extends KoansTest
{
    // TODO - refactor to pull dynamically from number of public methods on a class
    protected $totalExercises = 1;

    public function __construct()
    {
    	// TODO - ideally refactor so we don't override our constructor
        $this->chapter = new Example1();

        // TODO - slick way to loop through all other public methods (maybe starting with "test")
        $this->testCanBeNegated();
        
        parent::__construct();
    }

    public function testCanBeNegated()
    {
        if ($this->chapter->declareBoolean()) {
            $this->completeExercise();
        } else {
            // TODO - could potentially throw exception to get this here,
            // mutch better than it's not hard coded in two places
            $this->console('Edit /src/chapter1.php:9 to continue');
            $this->finish();
        }
    }
}
?>