<?php
namespace PHPKoans\Tests;

class KoansTest
{
    protected $example;

    // TODO - refactor to pull number of public methods on our $chapter
    private $exercisesTotal = 0;

    private $exercisesCompleted = 0;

    private $consoleOutput;

    public function __construct()
    {
        $this->exercisesTotal = count(get_class_methods($this->example));

        $this->testExamples();

        // TODO - way to have functions that don't test themselves and reference functions here

        if ($this->exercisesTotal == $this->exercisesCompleted) {
            $this->finish();
        }
    }

    private function console($message = null)
    {
        $this->consoleOutput .= $message."\n";
    }

    private function finish()
    {
        $percentComplete = ($this->exercisesCompleted / $this->exercisesTotal) * 100;

        if($percentComplete < 100) {
            $this->consoleOutput = ("  - ".$this->example->name." -\n\n").$this->consoleOutput;
            $this->console();
            $this->console('  Chapter 1 is '.$percentComplete.'% complete.');
        } else {
            

        }
        


        echo($this->consoleOutput);
        // TODO - logic not to output if we're at 100, or not...
    }

    private function completeExercise()
    {
        $this->exercisesCompleted++;
    }

    private function testExamples() {

        $examples = get_class_methods($this->example);

        array_walk($examples, function($example) {

            try {
                $this->example->{$example}();
                $this->completeExercise();
            } catch (\Exception $e) {
                $this->console('  '.$e->getMessage());
                $this->console('  Edit '.$e->getFile().':'.$example.'() to fix this.');
                $this->finish();
                die();
            }
        });
    }
}
?>