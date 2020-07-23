<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Config\ValidateRulesConfig;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CalculatorRequest
 *
 * @description Обработчик запросов калькулятора.
 *
 * @property string $operand1
 * @property string $operand2
 */
class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ValidateRulesConfig::SUM;
    }
}
