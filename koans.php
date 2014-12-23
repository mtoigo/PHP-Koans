<?php
require('vendor/autoload.php');

$terminal = new League\CLImate\CLImate;

$terminal->br();
$terminal->green()->out('| PHP Koans |');
$terminal->br();

// TODO - way to loop through everything here, array or evaluate classes in a namespace?
// TODO - Welcome if there's nothing filled out yet

$exercises = [
    new PHPKoans\Examples\Example1,
    new PHPKoans\Examples\Example2
];

// Calculate where we are
foreach($exercises as $chapter) {

    $lesson = new PHPKoans\Tests\KoansTest($chapter);
    $exercisesTotal += $lesson->exercisesTotal;

    if (!$incomplete) {

        try {
            $lesson->testExamples();
        } catch (Exception $e) {
            $incomplete = true;
        }

        $exercisesCompleted += $lesson->exercisesCompleted;
    }
}

$percentComplete = round(($exercisesCompleted / $exercisesTotal) * 100);

if ($percentComplete < 100) {
    $terminal->green()->out('PHP Koans are '.$percentComplete.'% Complete. Keep at it!');
} else {
    $terminal->green()->out('ALL DONE');
}
$terminal->br();