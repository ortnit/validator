<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

class ObjectType extends AbstractRule
{
    /**
     * @inheritDoc
     */
    public function validate($value): bool
    {
        return is_object($value);
    }
}
