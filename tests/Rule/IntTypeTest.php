<?php

declare(strict_types=1);

namespace Test\Rule;

use Ortnit\Validator\Exception\ValidatorException;
use Ortnit\Validator\Rule\IntType;
use PHPUnit\Framework\TestCase;

class IntTypeTest extends TestCase
{
    public function testBoolType()
    {
        $rule = new IntType();
        $this->assertInstanceOf(IntType::class, $rule);
        $this->assertFalse($rule->validate(true));
        $this->assertFalse($rule->validate(false));
        $this->assertTrue($rule->validate(1));
        $this->assertTrue($rule->validate(0));
        $this->assertTrue($rule->validate(-2));
        $this->assertFalse($rule->validate(2.5));
    }

    /**
     * @throws ValidatorException
     */
    public function testAssert()
    {
        $this->expectException(ValidatorException::class);
        $rule = new IntType();
        $rule->assert(1.5);
    }
}
