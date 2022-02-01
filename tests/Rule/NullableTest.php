<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Rule\Nullable;
use Ortnit\Validator\Rule\StringType;
use Ortnit\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;
use stdClass;

class NullableTest extends TestCase
{
    public function getRule(): Nullable
    {
        $rule = new Nullable(new StringType());
        $this->assertInstanceOf(Nullable::class, $rule);
        $this->assertInstanceOf(ValidatorInterface::class, $rule);
        return $rule;
    }

    public function testRuleInstance()
    {
        $rule = $this->getRule();

        $this->assertTrue($rule->validate(null));
        $this->assertTrue($rule->validate('test'));
        $this->assertFalse($rule->validate(123));
        $this->assertFalse($rule->validate(new stdClass()));
    }
}
