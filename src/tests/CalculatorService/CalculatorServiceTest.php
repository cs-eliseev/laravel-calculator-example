<?php

declare(strict_types=1);

namespace Tests\CalculatorService;

use App\Services\CalculatorService\CalculatorService;
use Tests\TestCase;

class CalculatorServiceTest extends TestCase
{
    /**
     * @param string $operand1
     * @param string $operand2
     * @param string $result
     *
     * @dataProvider sumDataProvider
     */
    public function testSum(string $operand1, string $operand2, string $result): void
    {
        $calculator = new CalculatorService();
        $this->assertEquals(
            $calculator->sum($operand1, $operand2),
            $result
        );
    }

    /**
     * @return array
     */
    public function sumDataProvider(): array
    {
        return [
            // Проверка пустой строки
            [
                '',
                '1',
                '1',
            ],
            [
                '1',
                '',
                '1',
            ],
            // Проверка возврата исходного значения при 0
            [
                '0',
                '9223372036854775808',
                '9223372036854775808',
            ],
            [
                '9223372036854775808',
                '0',
                '9223372036854775808',
            ],
            // Проверка суммы для int
            [
                '10',
                '174',
                '184',
            ],
            // Проверка суммы с переполнением
            [
                '9223372036854775807',
                '1',
                '9223372036854775808',
            ],
            // Проверка смещения при переполнении
            [
                '99999999999999999999',
                '2',
                '100000000000000000001',
            ],
        ];
    }
}
