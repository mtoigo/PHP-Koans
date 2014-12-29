<?php
namespace PHPKoans\Tests;

/**
 * Base class for a chapter of testable exercises
 */
abstract class Chapter
{
    /**
     * @var integer Number of this chapter
     */
    public $number;

    /**
     * @var string Name of this chapter
     */
    public $name;

    /**
     * @var array Collection of functions with keys matching class methods to test
     */
    public $exerciseTests;
}
