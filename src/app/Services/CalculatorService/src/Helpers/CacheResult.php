<?php

namespace App\Services\CalculatorService\src\Helpers;

use Illuminate\Support\Facades\Redis;

/**
 * Class CacheResult
 *
 * @description Работа с кэшем.
 */
class CacheResult
{
    public const PREFIX_SUM = 'sum';

    /**
     * Получить данные из кэша.
     *
     * @param string $a
     * @param string $b
     * @param string $prefix
     *
     * @return string|null
     */
    public static function get(string $a, string $b, string $prefix = self::PREFIX_SUM): ?string
    {
        return Redis::get("{$prefix}:{$a}:{$b}") ?? null;

    }

    /**
     * Записать данные в кэш.
     *
     * @param string $a
     * @param string $b
     * @param string $result
     * @param string $prefix
     */
    public static function set(string $a, string $b, string $result, string $prefix = self::PREFIX_SUM): void
    {
        Redis::set("{$prefix}:{$a}:{$b}", $result);
    }

    /**
     * Удаление данных из кэша.
     *
     * @param string $a
     * @param string $b
     * @param string $prefix
     */
    public static function delete(string $a, string $b, string $prefix = self::PREFIX_SUM): void
    {
        Redis::del("{$prefix}:{$a}:{$b}");
    }
}
