<?php

declare(strict_types=1);

namespace App\Services\CalculatorService\src\Handlers;

use App\Services\CalculatorService\src\Helpers\CacheResult;

/**
 * Class SumBigInteger
 *
 * @description Подсчет сумм для больших чисел.
 */
class SumBigInteger
{
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
        // В "a" всегда наибольшее значение
        if ($a < $b) {
            $c = $a;
            $a = $b;
            $b = $c;
            unset($c);
        }

        $maxLen = strlen($a);
        $b = str_pad($b, $maxLen, '0', STR_PAD_LEFT);

        // Получаем кэш
        $sum = CacheResult::get($a, $b);
        if ($sum) {
            return $sum;
        }

        $tmp = 0;
        $sum = '';

        do {
            $maxLen--;

            $result = $a[$maxLen] + $b[$maxLen] + $tmp;
            $tmp = 0;

            if ($result > 9) {
                $tmp = 1;
                $result = $result % 10;
            }

            $sum = $result . $sum;
        } while ($maxLen != 0);

        if ($tmp > 0) {
            $sum = "1{$sum}";
        }

        CacheResult::set($a, $b, $sum);

        return (string) $sum;
    }
}
