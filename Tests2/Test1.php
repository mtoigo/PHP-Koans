<?php
namespace PHPKoans\Tests;

use PHPKoans\Examples\Example1 as Example1;

class Test1 extends KoansTest
{
    public function __construct()
    {
        // TODO - ideally refactor so we don't override our constructor
        $this->example = new Example1();

        parent::__construct();
    }
}
