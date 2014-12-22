<?php
namespace PHPKoans\Tests;

class KoansTest
{
    protected $chapter;

    // TODO - refactor to pull number of public methods on our $chapter
    protected $totalExercises = 0;

    protected function console($message = null)
    {
        echo($message."\n");
    }

    protected function finish()
    {
        $percentComplete = ($this->exercisesCompleted / $this->totalExercises) * 100;
        $this->console();
        $this->console('Chapter 1 is '.$percentComplete.'%');

        // TODO - logic not to output if we're at 100, or not...
    }

    protected function completeExercise()
    {

        $this->exercisesCompleted++;
    }

    public function __construct()
    {

        // TODO - slick way to loop through all public methods and execute
        $this->finish();
    }
}
?>