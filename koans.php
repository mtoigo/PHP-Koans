<?php
require 'vendor/autoload.php';

// TODO 3. - Welcome if there's nothing filled out yet
// TODO 2. - PHP Check for version
// TODO - Refactor some from KoansTest to Example

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->runTests();
$tests->outputFooter();
