<?php

declare(strict_types=1);

namespace App\Components\SeoComponent;

use App\Components\SeoComponent\Models\SeoModel;

/**
 * Class Seo
 *
 * @description СЕО Компонент.
 */
class Seo
{
    /**
     * @var SeoModel $seo
     */
    protected $seo;

    /**
     * Seo constructor.
     *
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->seo = new SeoModel();
        $this->init($params);
    }

    /**
     * Получить модель данных.
     *
     * @return SeoModel
     */
    public function getSeo(): SeoModel
    {
        return $this->seo;
    }

    /**
     * Инициализация параметров модели.
     *
     * @param array $params
     */
    protected function init(array $params)
    {
        $this->seo->title = $params['title'] ?? ($params['heading'] ?? '');
        $this->seo->description = $params['description'] ?? (empty($params['content'])
                                                            ? ''
                                                            : substr(strip_tags($params['content']), 0, 170));
        $this->seo->keywords = empty($params['keywords'])
                             ? ''
                             : (is_array($params['keywords']) ? implode(', ', $params['keywords']) : $params['keywords']);
    }
}
