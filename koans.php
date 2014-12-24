<?php
require 'vendor/autoload.php';

// TODO - Welcome if there's nothing filled out yet
// TODO - PHP Check for version
// TODO - Clean up example, chapter, lesson nameing

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->runTests();
$tests->outputFooter();
