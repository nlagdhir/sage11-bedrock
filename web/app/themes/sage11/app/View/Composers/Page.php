<?php
namespace App\View\Composers;
use Roots\Acorn\View\Composer;

class Page extends Composer
{
    protected static $views = [
        'page',
        'partials.page-sections',
    ];

    public function with()
    {
        return [
            'pageSections' => get_field('page_sections') ?: [],
        ];
    }
}
