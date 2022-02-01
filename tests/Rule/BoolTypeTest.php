<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Exception\ValidatorException;
use Ortnit\Validator\Rule\BoolType;
use PHPUnit\Framework\TestCase;

class BoolTypeTest extends TestCase
{
    public function testBoolType()
    {
        $rule = new BoolType();
        $this->assertInstanceOf(BoolType::class, $rule);
        $this->assertTrue($rule->validate(true));
        $this->assertTrue($rule->validate(false));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate(0));
    }

    /**
     * @throws ValidatorException
     */
    public function testAssert()
    {
        $this->expectException(ValidatorException::class);
        $rule = new BoolType();
        $rule->assert(1);
    }
}
