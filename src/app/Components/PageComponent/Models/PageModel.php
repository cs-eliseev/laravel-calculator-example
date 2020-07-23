<?php

declare(strict_types=1);

namespace App\Components\PageComponent\Models;

use App\Components\SeoComponent\Models\SeoModel;

/**
 * Class PageModel
 *
 * @description Модель данных страницы.
 */
class PageModel
{
    /**
     * @var string $heading
     */
    public $heading;

    /**
     * @var string $content
     */
    public $content;

    /**
     * @var SeoModel $seo
     */
    public $seo;
}
