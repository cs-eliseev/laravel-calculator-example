<?php

declare(strict_types=1);

namespace App\Components\PageComponent;

use App\Components\PageComponent\Models\PageModel;
use App\Components\SeoComponent\Models\SeoModel;
use App\Components\SeoComponent\Seo;

/**
 * Class Page
 *
 * @description Компонент страницы.
 */
class Page
{
    /**
     * @var PageModel $page
     */
    protected $page;

    /**
     * Seo constructor.
     *
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->page = new PageModel();
        $this->init($params);
    }

    /**
     * Получить модель данных.
     *
     * @return PageModel
     */
    public function getPage(): PageModel
    {
        return $this->page;
    }

    /**
     * Инициализация параметров модели.
     *
     * @param array $params
     */
    protected function init(array $params)
    {
        $seo = new Seo($params);
        $this->page->heading = $params['heading'] ?? '';
        $this->page->content = $params['content'] ?? '';
        $this->page->seo = $seo->getSeo();
    }
}
