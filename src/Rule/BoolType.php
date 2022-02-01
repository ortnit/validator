<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

class BoolType extends AbstractRule
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function validate($value): bool
    {
        return is_bool($value);
    }
}
