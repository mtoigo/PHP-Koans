<?php
require 'vendor/autoload.php';

// TODO 3. - Welcome if there's nothing filled out yet
// TODO 2. - PHP Check for version

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->testChapters();
$tests->outputFooter();
