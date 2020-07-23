<?php

namespace App\Exceptions;

/**
 * Interface BaseExceptionInterface
 *
 * @description Базовый интерфей исключений.
 */
interface BaseExceptionInterface
{
    /**
     * Получить параметры сообщения.
     *
     * @return array
     */
    public function getMsgParams(): array;
}
