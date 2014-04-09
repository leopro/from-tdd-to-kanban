<?php

namespace Leopro\Tdd\Test;

use Leopro\Tdd\EnvironmentChecker;

class EnvironmentCheckerTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $object = new EnvironmentChecker();
        $this->assertTrue($object->isReady());
    }
}