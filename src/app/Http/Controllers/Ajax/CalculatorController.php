<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ajax;

use App\Http\Requests\CalculatorRequest;
use App\Services\CalculatorService\CalculatorService;
use Illuminate\Http\JsonResponse;

/**
 * Class CalculatorController
 *
 * @description Обработка опереаций калькулятора.
 */
class CalculatorController extends BaseController
{
    /**
     * Сумма.
     *
     * @param CalculatorRequest $request
     *
     * @return JsonResponse
     */
    public function sum(CalculatorRequest $request): JsonResponse
    {
        $calculator = new CalculatorService();

        $result = collect([
            'result' => $calculator->sum($request->operand1, $request->operand2),
        ]);

        return $this->response($result, true);
    }
}
