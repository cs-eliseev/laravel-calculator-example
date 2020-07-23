<?php

declare(strict_types=1);

namespace App\Config;

/**
 * Class ValidateRulesConfig
 *
 * @description Правила валидации.
 */
class ValidateRulesConfig
{
    public const SUM = [
        'operand1' => 'digits_between:1,255',
        'operand2' => 'digits_between:1,255',
    ];
}
