<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Exception\ValidatorException;
use Ortnit\Validator\Rule\FloatType;
use PHPUnit\Framework\TestCase;

class FloatTypeTest extends TestCase
{
    public function testBoolType()
    {
        $rule = new FloatType();
        $this->assertInstanceOf(FloatType::class, $rule);
        $this->assertFalse($rule->validate(true));
        $this->assertFalse($rule->validate(false));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate(0));
        $this->assertFalse($rule->validate(-2));
        $this->assertTrue($rule->validate(2.5));
    }

    /**
     * @throws ValidatorException
     */
    public function testAssert()
    {
        $this->expectException(ValidatorException::class);
        $rule = new FloatType();
        $rule->assert(10);
    }
}
