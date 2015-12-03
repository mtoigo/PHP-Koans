<?php
namespace PHPKoans\Tests;

use League\CLImate\CLImate as Terminal;

/**
 * Implementing and tracking all chapters we're testing on
 */
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

    /**
     * Default constructor defining array of chapters to test
     */
    public function __construct()
    {
        $this->terminal = new Terminal();

        $this->classesToTest = [
            new \PHPKoans\Chapters\Chapter1(),
            new \PHPKoans\Chapters\Chapter2(),
            new \PHPKoans\Chapters\Chapter3()
        ];
    }

    /**
     * Run tests in all of our chapters
     */
    public function testChapters()
    {
        // Test our chapters and keep track of where we are
        foreach ($this->classesToTest as $class) {
            $chapter = new \PHPKoans\Tests\KoansTest($class);
            $this->exercisesTotal += $chapter->exercisesTotal;

            if (!$incomplete) {
                try {
                    $chapter->testExercises();
                } catch (\Exception $e) {
                    $incomplete = true;
                }
                $this->exercisesCompleted += $chapter->exercisesCompleted;
            }
        }
    }

    /**
     * Calculate percentage of all exercises that are complete
     */
    private function percentComplete()
    {
        return round(($this->exercisesCompleted / $this->exercisesTotal) * 100);
    }

    /**
     * Terminal output to start
     */
    public function outputHeader()
    {
        $this->terminal->br();
        $this->terminal->green()->out('| PHP Koans |');
        $this->terminal->br();
    }

    /**
     * Terminal Output to end
     */
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
