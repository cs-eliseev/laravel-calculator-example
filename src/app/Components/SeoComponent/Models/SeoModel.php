<?php

declare(strict_types=1);

namespace App\Components\SeoComponent\Models;

/**
 * Class SeoModel
 *
 * @description Модель данных СЕО.
 */
class SeoModel
{
    /**
     * Заголовок страницы.
     *
     * @var string $title
     */
    public $title;

    /**
     * Описание страницы.
     *
     * @var string $description
     */
    public $description;

    /**
     * Ключевые слова страницы.
     *
     * @var string $keywords
     */
    public $keywords;
}
