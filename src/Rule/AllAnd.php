<?php

declare(strict_types=1);

namespace Ortnit\Validator\Rule;

use Ortnit\Validator\ValidatorInterface;

class AllAnd extends AbstractRule
{
    /**
     * @var ValidatorInterface[]
     */
    protected array $rules;

    public function __construct(ValidatorInterface ...$rules)
    {
        $this->rules = $rules;
    }

    /**
     * @inheritDoc
     */
    public function validate($value): bool
    {
        foreach ($this->rules as $rule) {
            if (!$rule->validate($value)) {
                return false;
            }
        }

        return true;
    }
}
