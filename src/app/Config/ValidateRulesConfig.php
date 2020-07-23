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
        'operand1' => 'custom_numeric|between:0,255',
        'operand2' => 'custom_numeric|between:0,255',
    ];
}
