<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Components\PageComponent\Models\PageModel;
use App\Components\PageComponent\Page;
use Illuminate\View\View;

/**
 * Class BaseController
 *
 * @description Базовый класс для контроллеров.
 */
class BaseController extends Controller
{
    /**
     * Рендер страницы.
     *
     * @param PageModel $page
     * @param string $template
     *
     * @return View
     */
    protected function render(PageModel $page, string $template = 'templates.index'): View
    {
        return view($template, [
            'page' => $page
        ]);
    }

    /**
     * Сформировать данные страницы.
     *
     * @param array $params
     *
     * @return PageModel
     */
    protected function getPage(array $params): PageModel
    {
        $page = new Page($params);

        return $page->getPage();
    }
}
