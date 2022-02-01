<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

/**
 * Class DateTimeType
 *
 * @package Ortnit\Validator\Rule
 */
class DateType extends AbstractRule
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value): bool
    {
        // I love strong typed legacy php
        return 1 === preg_match('#\\d{4}-\\d{2}-\\d{2}#', $value);
    }
}
