<?php

namespace App\Widgets;

use Statamic\Widgets\Widget;

class Welcome extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $pages = \Statamic\Facades\Entry::query()->where('collection', 'pages')->count();
        $posts = \Statamic\Facades\Entry::query()->where('collection', 'pages')->count();

        return view('widgets.welcome', [
                'pages' => $pages,
                'posts' => $posts
        ]);
    }
}
