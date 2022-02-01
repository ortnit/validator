<?php

declare(strict_types=1);

namespace Ortnit\Tests\Rule;

use Ortnit\Validator\Rule\ResourceType;
use Ortnit\Validator\ValidatorInterface;
use PHPUnit\Framework\TestCase;
use stdClass;

class ResourceTypeTest extends TestCase
{
    public function getRule(): ResourceType
    {
        $rule = new ResourceType();
        $this->assertInstanceOf(ResourceType::class, $rule);
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
        $this->assertFalse($rule->validate(['test data']));
        $this->assertTrue($rule->validate(tmpfile()));
    }
}
