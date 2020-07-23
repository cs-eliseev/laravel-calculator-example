<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

/**
 * Class CustomValidator
 *
 * @description Расширение валидатора.
 */
class CustomValidator extends Validator
{
    /**
     * @param $attribute
     * @param $value
     *
     * @return bool
     */
    protected function validateCustomNumeric($attribute, $value): bool
    {
        return (bool) preg_match('/^\d*$/', $value);
    }
}
