<?php

declare(strict_types=1);

namespace Ortnit\Validator;

use Ortnit\Validator\Exception\ValidatorException;

interface ValidatorInterface
{
    /**
     * validates value against validator
     *
     * @param mixed $value
     * @return bool
     */
    public function validate($value): bool;

    /**
     * @param mixed $value
     * @throws ValidatorException
     */
    public function assert($value): void;
}
