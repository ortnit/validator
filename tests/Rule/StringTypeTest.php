<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Rule\StringType;
use Ortnit\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;
use stdClass;

class StringTypeTest extends TestCase
{
    public function getRule(): StringType
    {
        $rule = new StringType();
        $this->assertInstanceOf(StringType::class, $rule);
        $this->assertInstanceOf(ValidatorInterface::class, $rule);
        return $rule;
    }

    public function testRuleInstance()
    {
        $rule = $this->getRule();

        $this->assertFalse($rule->validate(null));
        $this->assertTrue($rule->validate('test'));
        $this->assertFalse($rule->validate(123));
        $this->assertFalse($rule->validate(new stdClass()));
    }
}
