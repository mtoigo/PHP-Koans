<?php
namespace PHPKoans\Tests;

use League\CLImate\CLImate as Terminal;

/**
 * Test exercises in a chapter
 */
class KoansTest
{
    /**
     * @var Example Class that we're currently testing
     */
    private $chapter;

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
     * @param Chapter $chapter instance of the class that we want to test
     */
    public function __construct(Chapter $chapter)
    {
        $this->chapter = $chapter;
        $this->exercisesTotal = count($this->exercisesInChapter());
    }

    /**
     * Finish testing of a particular class
     * @param  string    $exerciseErrorMessage Formatted error message related to what failed
     * @throws Exception Throws an exception to pass control back up a level
     */
    private function finishChapter($exerciseErrorMessage)
    {
        $terminal = new Terminal();

        $terminal->bold()->out("  Chapter ".$this->chapter->number.": ".$this->chapter->name."\n");
        $terminal->out($exerciseErrorMessage);
        $terminal->br();
        $terminal->out('  Chapter '.$this->chapter->number.' is '.$this->percentComplete().'% complete.');
        $terminal->br();

        throw new \Exception();
    }

    /**
     * Increment that a test finished successfully
     */
    private function completeExercise()
    {
        $this->exercisesCompleted++;
    }

    /**
     * Test all examples in our chapter
     */
    public function testExercises()
    {
        array_walk($this->exercisesInChapter(), function ($exercise) {
            $this->testExercise($exercise);
        });
    }

    /**
     * Determine the number of exercises that have finished succesfully in our chapter
     * @return integer Percentage of tests in chapter completed
     */
    private function percentComplete()
    {
        return round(($this->exercisesCompleted / $this->exercisesTotal) * 100);
    }

    /**
     * Test an exercise in our chapter
     * @param  string    $exercise name of exercise to test
     * @throws Exception if a test didn't complete
     */
    private function testExercise($exercise)
    {
        try {
            // If we have a custom test use it
            if ($this->chapter->exerciseTests[$exercise]) {
                $this->chapter->exerciseTests[$exercise]();
            // Otherwise just execute the test function
            } else {
                $this->chapter->{$exercise}();
            }
            $this->completeExercise();
        } catch (\Exception $e) {
            $formattedErrorMessage = $this->formatFailingException($e, $exercise);
            $this->finishChapter($formattedErrorMessage);
        }
    }

    /**
     * Return exercises in our chapter that we can test
     */
    private function exercisesInChapter()
    {
        // Ignore our constructor
        return array_filter(get_class_methods($this->chapter), function ($functionName) {
            if ($functionName != '__construct') {
                return true;
            }
        });
    }

    /**
     * Format an exception to a nice error message for the terminal
     * @param  Exception $exception               Exception from a failing test
     * @param  string    $failingTestFunctionName Name of function that failed our test
     * @return string    formatted error message for console output
     */
    private function formatFailingException(\Exception $exception, $failingTestFunctionName)
    {
        $errorMessage = '    Example '.$this->chapter->number.'.'.($this->exercisesCompleted + 1).' needs a solution.'."\n";
        $errorMessage .= '    '.$exception->getMessage()."\n";
        $errorMessage .= '    Edit '.$exception->getFile().':'.$failingTestFunctionName.'() to fix this.';

        return $errorMessage;
    }
}
