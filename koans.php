<?php
require 'vendor/autoload.php';

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->testChapters();
$tests->outputFooter();
