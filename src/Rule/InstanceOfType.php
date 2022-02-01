<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

use Ortnit\Validator\ValidatorInterface;

class InstanceOfType extends AbstractRule
{
    /** @var string  */
    protected string $className;

    /**
     * InstanceOfType constructor.
     *
     * @param string $className
     */
    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * @inheritDoc
     */
    public function validate($value): bool
    {
        return $value instanceof $this->className;
    }
}
