<?php

namespace Leopro\Tdd\Tests;

use Leopro\Tdd\EnvironmentChecker;

class EnvironmentCheckerTest extends \PHPUnit_Framework_TestCase
{
    public function testEnvironmentIsReady()
    {
        $object = new EnvironmentChecker();
        $this->assertTrue($object->isReady());
    }
}