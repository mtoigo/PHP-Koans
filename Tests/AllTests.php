<?php
namespace PHPKoans\Tests;

use \League\CLImate\CLImate as Terminal;

class AllTests
{
    /**
     * @var Terminal Pretty output for our terminal
     */
    private $terminal;

    /**
     * @var array Instances of classes that we're testing
     */
    private $classesToTest;

    /**
     * @var integer Number of tests total in our class we're testing
     */
    private $exercisesTotal;

    /**
     * @var integer Number of tests completed in our class we're testing
     */
    private $exercisesCompleted;

    public function __construct()
    {
        $this->terminal = new Terminal();

        $this->classesToTest = [
            new \PHPKoans\Chapters\Chapter1(),
            new \PHPKoans\Chapters\Chapter2()
        ];
    }

    public function runTests()
    {
        // Calculate where we are
        foreach ($this->classesToTest as $chapter) {
            $lesson = new \PHPKoans\Tests\KoansTest($chapter);
            $this->exercisesTotal += $lesson->exercisesTotal;

            if (!$incomplete) {
                try {
                    $lesson->testExamplesInClass();
                } catch (\Exception $e) {
                    $incomplete = true;
                }

                $this->exercisesCompleted += $lesson->exercisesCompleted;
            }
        }
    }

    private function percentComplete()
    {
        return round(($this->exercisesCompleted / $this->exercisesTotal) * 100);
    }

    public function outputHeader()
    {
        $this->terminal->br();
        $this->terminal->green()->out('| PHP Koans |');
        $this->terminal->br();
    }

    public function outputFooter()
    {
        $percentComplete = $this->percentComplete();

        if ($percentComplete < 100) {
            $this->terminal->green()->out('PHP Koans are '.$percentComplete.'% Complete. Keep at it!');
        } else {
            $this->terminal->green()->out('ALL DONE');
        }
        $this->terminal->br();
    }
}
