<?php
namespace PHPKoans\Tests;

use PHPKoans\Tests\Chapter as Chapter;
use \League\CLImate\CLImate as Terminal;

class KoansTest
{
    /**
     * @var Example Class that we're currently testing
     */
    private $testedClass;

    /**
     * @var integer Number of tests in our class that is being tested
     */
    public $exercisesTotal = 0;

    /**
     * @var integer Number of tests that ran without error
     */
    public $exercisesCompleted = 0;

    /**
     * Initialize with class we want to test
     * @param Chapter $testedClass instance of the class that we want to test
     */
    public function __construct(Chapter $testedClass)
    {
        $this->testedClass = $testedClass;
        $this->exercisesTotal = count($this->methodsInTestedClass());
    }

    /**
     * Finish testing of a particular class
     * @param string $exerciseErrorMessage Formatted error message related to what failed
     * @throws Exception Throws an exception to pass control back up a level
     */
    private function finishExample($exerciseErrorMessage)
    {
        $terminal = new Terminal();

        $terminal->bold()->out("  Chapter ".$this->testedClass->number.": ".$this->testedClass->name."\n");
        $terminal->out($exerciseErrorMessage);
        $terminal->br();
        $terminal->out('  Chapter '.$this->testedClass->number.' is '.$this->percentComplete().'% complete.');
        $terminal->br();

        throw new \Exception();
    }

    private function completeExercise()
    {
        $this->exercisesCompleted++;
    }

    public function testExamplesInClass()
    {
        array_walk($this->methodsInTestedClass(), function ($example) {
            $this->testExampleFunction($example);
        });
    }

    private function percentComplete()
    {
        return round(($this->exercisesCompleted / $this->exercisesTotal) * 100);
    }

    private function testExampleFunction($example)
    {
        try {
            if ($this->testedClass->exerciseTests[$example]) {
                $this->testedClass->exerciseTests[$example]();
            } else {
                $this->testedClass->{$example}();
            }
            $this->completeExercise();
        } catch (\Exception $e) {
            $formattedErrorMessage = $this->formatError($e, $example);
            $this->finishExample($formattedErrorMessage);
        }
    }

    private function methodsInTestedClass()
    {
        // Ignore our constructor
        return array_filter(get_class_methods($this->testedClass), function($functionName) {
            if ($functionName != '__construct') {
                return true;
            }
        });
    }

    private function formatError(\Exception $e, $failingTestFunctionName)
    {   
        $errorMessage = '    Example '.$this->testedClass->number.'.'.($this->exercisesCompleted + 1).' needs a solution.'."\n";
        $errorMessage .= '    '.$e->getMessage()."\n";
        $errorMessage .= '    Edit '.$e->getFile().':'.$failingTestFunctionName.'() to fix this.';
        return $errorMessage;
    }
}
