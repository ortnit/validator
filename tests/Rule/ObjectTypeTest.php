<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Rule\ObjectType;
use Ortnit\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;
use stdClass;

class ObjectTypeTest extends TestCase
{
    public function getRule(): ObjectType
    {
        $rule = new ObjectType();
        $this->assertInstanceOf(ObjectType::class, $rule);
        $this->assertInstanceOf(ValidatorInterface::class, $rule);
        return $rule;
    }

    public function testRuleInstance()
    {
        $rule = $this->getRule();

        $this->assertFalse($rule->validate(null));
        $this->assertFalse($rule->validate('test'));
        $this->assertFalse($rule->validate(123));
        $this->assertTrue($rule->validate(new stdClass()));
        $this->assertFalse($rule->validate(['test data']));
    }
}
