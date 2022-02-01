<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

use Ortnit\Validator\Exception\ValidatorException;
use Ortnit\Validator\ValidatorInterface;

abstract class AbstractRule implements ValidatorInterface
{
    protected string $name;

    public function getName(): string
    {
        return basename(get_class($this));
    }

    /**
     * @inheritDoc
     */
    abstract public function validate($value): bool;

    /**
     * @inheritDoc
     */
    public function assert($value): void
    {
        if (!$this->validate($value)) {
            $message = sprintf('validation error: %s(%s)', $value, $this->getName());
            throw new ValidatorException($message);
        }
    }
}
