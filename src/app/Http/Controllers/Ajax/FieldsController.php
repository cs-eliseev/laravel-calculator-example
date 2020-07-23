<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ajax;

use App\Config\ErrorConfig;
use App\Helpers\ErrorMessage;
use Illuminate\Http\JsonResponse;

/**
 * Class FieldsController
 *
 * @description Обработка опереаций калькулятора.
 */
class FieldsController extends BaseController
{
    /**
     * Получение полей.
     *
     * @param string $type
     *
     * @return JsonResponse
     */
    public function group(string $type): JsonResponse
    {
        $isSuccess = false;

        try {
            $data = collect(trans("fields.{$type}", [], ErrorConfig::LOCAL_FRONT));

            $isSuccess = true;
        } catch (\Throwable $e) {
            $data = ErrorMessage::getResponseMessage($e);
        }

        return $this->response($data, $isSuccess);
    }
}
