<?php
namespace PHPKoans\Tests;

class KoansTest
{
    protected $example;

    public $exercisesTotal = 0;

    public $exercisesCompleted = 0;

    private $consoleOutput;

    private $incomplete = false;

    // TODO - refactor with type hinting
    public function __construct($example)
    {
        $this->example = $example;
        $this->exercisesTotal = count(get_class_methods($this->example));

        // TODO - way to have functions that don't test themselves and reference functions here
    }

    private function console($message = null)
    {
        $this->consoleOutput .= $message."\n";
    }

    private function finish($exerciseErrorMessage)
    {
        $terminal = new \League\CLImate\CLImate();

        if ($percentComplete < 100) {
            $terminal->bold()->out("  Chapter ".$this->example->chapterNumber.": ".$this->example->chapterName."\n");
            $terminal->out($exerciseErrorMessage);
            $terminal->br();
            $terminal->out('  Chapter '.$this->example->chapterNumber.' is '.round($percentComplete).'% complete.');
            $terminal->br();
        }

        throw new \Exception();
    }

    private function completeExercise()
    {
        $this->exercisesCompleted++;
    }

    public function testExamples()
    {
        $examples = get_class_methods($this->example);

        array_walk($examples, function ($example) {

            try {
                $this->example->{$example}();
                $this->completeExercise();
            } catch (\Exception $e) {
                $exerciseErrorMessage = '    Example '.$this->example->chapterNumber.'.'.($this->exercisesCompleted + 1).' needs a solution.'."\n";
                $exerciseErrorMessage .= '    '.$e->getMessage()."\n";
                $exerciseErrorMessage .= '    Edit '.$e->getFile().':'.$example.'() to fix this.';
                $this->finish($exerciseErrorMessage);
            }

        });
    }
}
