<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

class Instance extends AbstractRule
{
    /**
     * full qualified class name
     *
     * @var string
     */
    protected string $className;

    /**
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
