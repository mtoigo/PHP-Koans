<?php
namespace PHPKoans\Tests;

class AllTests
{
    private $terminal;

    private $tests;

    private $exercisesTotal;

    private $exercisesCompleted;

    public function __construct()
    {
        $this->terminal = new \League\CLImate\CLImate();

        $this->tests = [
            new \PHPKoans\Examples\Example1(),
            new \PHPKoans\Examples\Example2(),
        ];
    }

    public function runTests()
    {
        // Calculate where we are
        foreach ($this->tests as $chapter) {
            $lesson = new \PHPKoans\Tests\KoansTest($chapter);
            $this->exercisesTotal += $lesson->exercisesTotal;

            if (!$incomplete) {
                try {
                    $lesson->testExamples();
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
