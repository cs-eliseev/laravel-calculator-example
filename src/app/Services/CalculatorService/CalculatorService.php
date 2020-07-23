<?php

declare(strict_types=1);

namespace App\Services\CalculatorService;

use App\Services\CalculatorService\src\Handlers\Sum;

/**
 * Class CalculatorService
 *
 * @description Компановщик калькулятора.
 */
class CalculatorService
{
    /** @var Sum $calculateSum */
    protected $calculateSum;

    /**
     * CalculatorService constructor.
     */
    public function __construct()
    {
        $this->calculateSum = new Sum();
    }

    /**
     * Сумма двух чисел.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function sum(string $a, string $b): string
    {
        return $this->calculateSum->run($a ?: '0', $b ?: '0');
    }
}
