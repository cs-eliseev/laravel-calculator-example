<?php

declare(strict_types=1);

namespace Tests\CalculatorService;

use App\Services\CalculatorService\src\Helpers\CacheResult;
use Illuminate\Support\Facades\Redis;
use Tests\TestCase;

class CacheTest extends TestCase
{
    public static $key = 'test';

    /**
     * Установка кэша.
     */
    public function testSetCash(): void
    {
        $this->assertNull(
            Redis::get(self::$key . ':' . self::$key . ':' . self::$key)
        );
        CacheResult::set(self::$key, self::$key, self::$key, self::$key);
        $this->assertEquals(
            Redis::get(self::$key . ':' . self::$key . ':' . self::$key),
            self::$key
        );
    }

    /**
     * Получение кэша.
     */
    public function testGetCash(): void
    {
        $this->assertEquals(
            CacheResult::get(self::$key, self::$key, self::$key),
            self::$key
        );
    }

    /**
     * Удаление кэша.
     */
    public function testDeleteCash(): void
    {
        CacheResult::delete(self::$key, self::$key, self::$key);
        $this->assertNull(
            Redis::get(self::$key . ':' . self::$key . ':' . self::$key)
        );
    }
}
