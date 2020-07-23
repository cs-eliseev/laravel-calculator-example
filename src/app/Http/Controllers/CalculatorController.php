<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class CalculatorController
 *
 * @description Калькулятор.
 */
class CalculatorController extends BaseController
{
    /**
     * Форма заказа.
     *
     * @return View
     */
    public function index(): View
    {
        return $this->render($this->getPage([
            'title' => 'Сумма числел',
            'description' => 'Сложение двух положительных чисел',
            'keywords' => [
                'калькулятор',
                'сумма чисел',
                'сложение большик чисел',
            ],
            'heading' => 'Калькулятор',
        ]));
    }
}
