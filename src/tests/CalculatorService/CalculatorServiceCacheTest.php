<?php

declare(strict_types=1);

namespace Tests\CalculatorService;

use App\Services\CalculatorService\CalculatorService;
use App\Services\CalculatorService\src\Helpers\CacheResult;
use Tests\TestCase;

class CalculatorServiceCacheTest extends TestCase
{
    /**
     * Проверка записи кеша при малых данных.
     */
    public function testSmallInteger(): void
    {
        $a = '2';
        $b = '1';

        $this->assertNull(CacheResult::get($a, $b));
        $calculator = new CalculatorService();
        $calculator->sum($a, $b);
        $this->assertNull(CacheResult::get($a, $b));
    }

    /**
     * Проверка установки кеша.
     */
    public function testSetCash(): void
    {
        $a = '9223372036854775807';
        $b = '9223372036854775806';

        $result = CacheResult::get($a, $b);
        if (isset($result)) {
            CacheResult::delete($a, $b);
        }

        $calculator = new CalculatorService();
        $sum = $calculator->sum($a, $b);
        $cash = CacheResult::get($a, $b);
        $this->assertEquals($cash, $sum);
    }

    /**
     * Проверка формировании ключа на большее значение.
     */
    public function testRevertKey(): void
    {
        $a = '9223372036854775806';
        $b = '9223372036854775807';

        $result = CacheResult::get($a, $b);
        if (isset($result)) {
            CacheResult::delete($a, $b);
        }

        $calculator = new CalculatorService();
        $sum = $calculator->sum($a, $b);
        $this->assertEquals(CacheResult::get($b, $a), $sum);
    }
}
