<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ajax;

use App\Config\ResponseStatusConfig;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

/**
 * Class BaseController
 *
 * @description Базовый класс для контроллеров.
 */
class BaseController extends Controller
{
    use ValidatesRequests;

    /**
     * Шаблон стандартного ответа.
     *
     * @param Collection $data
     * @param bool $isSuccess
     *
     * @return JsonResponse
     */
    protected function response(Collection $data, bool $isSuccess = true): JsonResponse
    {
        return response()->json([
            'status' => $isSuccess ? ResponseStatusConfig::OK : ResponseStatusConfig::ERROR,
            'data' => $data->toArray()
        ], $isSuccess ? Response::HTTP_OK : Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
