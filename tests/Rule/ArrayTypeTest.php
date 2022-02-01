<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Rule\ArrayType;
use Ortnit\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;
use stdClass;

class ArrayTypeTest extends TestCase
{
    public function getRule(): ArrayType
    {
        $rule = new ArrayType();
        $this->assertInstanceOf(ArrayType::class, $rule);
        $this->assertInstanceOf(ValidatorInterface::class, $rule);
        return $rule;
    }

    public function testRuleInstance()
    {
        $rule = $this->getRule();

        $this->assertFalse($rule->validate(null));
        $this->assertFalse($rule->validate('test'));
        $this->assertFalse($rule->validate(123));
        $this->assertFalse($rule->validate(new stdClass()));
        $this->assertTrue($rule->validate(['test']));
    }
}
