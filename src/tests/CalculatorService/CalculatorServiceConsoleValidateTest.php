<?php

declare(strict_types=1);

namespace Tests\CalculatorService;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CalculatorServiceConsoleValidateTest extends TestCase
{
    /**
     * @param string $operand1
     * @param string $operand2
     * @param string $reg
     *
     * @dataProvider validateDataProvider
     */
    public function testValidate(string $operand1, string $operand2, string $reg): void
    {
        Artisan::call('calculator:sum', [
            'operand1' => $operand1,
            'operand2' => $operand2,
        ]);

        $this->assertTrue((bool) preg_match($reg, Artisan::output()));
    }

    /**
     * @return array
     */
    public function validateDataProvider(): array
    {
        return [
            // Проверка на число
            [
                'asd',
                '1',
                '/The .+ must be a positive number./',
            ],
            [
                '1',
                'asd',
                '/The .+ must be a positive number./',
            ],
            // Проверка на положительное число
            [
                '-1',
                '1',
                '/The .+ must be a positive number./',
            ],
            [
                '1',
                '-1',
                '/The .+ must be a positive number./',
            ],
            // Проверка длинны строки
            [
                '9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999',
                '1',
                '/The .+ must be between 0 and 255 characters./',
            ],
            [
                '1',
                '9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999',
                '/The .+ must be between 0 and 255 characters./',
            ],
        ];
    }
}
