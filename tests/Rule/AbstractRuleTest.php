<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Exception\ValidatorException;
use Ortnit\Validator\Rule\AbstractRule;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AbstractRuleTest extends TestCase
{
    public function getClass(): MockObject
    {
        $mock = $this->getMockForAbstractClass(AbstractRule::class);
        $this->assertInstanceOf(AbstractRule::class, $mock);
        return $mock;
    }

    public function testAbstractRuleTrue()
    {
        $stub = $this->getClass();
        $stub->expects($this->any())->method('validate')->will($this->returnValue(true));
        $stub->assert('some data');
        /**
         * won't reach it if a exception is thrown
         */
        $this->assertTrue(true);
    }

    public function testAbstractRuleFalse()
    {
        $this->expectException(ValidatorException::class);
        $stub = $this->getClass();
        $stub->expects($this->any())->method('validate')->will($this->returnValue(false));
        $stub->assert('some data');
    }

    public function testGetName()
    {
        $stub = $this->getClass();
        $name = $stub->getName();
        $this->assertIsString($name);
    }
}
