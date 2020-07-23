<?php

declare(strict_types=1);

namespace App\Services\CalculatorService\src\Handlers;

/**
 * Class Sum
 *
 * @description Обработчик расчета суммы.
 */
class Sum
{
    /** @var SumBigInteger $bigIntegerSum */
    protected $bigIntegerSum;

    /**
     * Sum constructor.
     */
    public function __construct()
    {
        $this->bigIntegerSum = new SumBigInteger();
    }

    /**
     * Запуск процесса обработки.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function run(string $a, string $b): string
    {
        if ($a == 0) {
            return $b;
        }

        if ($b == 0) {
            return $a;
        }

        $sum = (string) ((int) $a + (int) $b);

        // Проверяем переполнение
        if ($sum - $a != $b) {
            $sum = $this->bigIntegerSum->run($a, $b);
        }

        return $sum;
    }
}
