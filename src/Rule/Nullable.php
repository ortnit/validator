<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

use Ortnit\Validator\ValidatorInterface;

class Nullable extends AbstractRule
{
    /**
     * @var ValidatorInterface
     */
    protected ValidatorInterface $rule;

    /**
     * @param ValidatorInterface $rule
     */
    public function __construct(ValidatorInterface $rule)
    {
        $this->rule = $rule;
    }

    /**
     * @return ValidatorInterface
     */
    public function getRule(): ValidatorInterface
    {
        return $this->rule;
    }

    /**
     * @inheritDoc
     */
    public function validate($value): bool
    {
        if ($value === null) {
            return true;
        }

        return $this->rule->validate($value);
    }
}
