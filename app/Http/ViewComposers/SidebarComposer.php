<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

class SidebarComposer
{

    /**
     * @var Post $news
     */
    protected $news;

    /**
     * @var Post $pages
     */
    protected $pages;


    /**
     * NavigationComposer constructor.
     * @param Post $posts
     */
    public function __construct(Post $posts)
    {
        $this->news = $posts->whereTypeIs('blog')->with('type')->get();
        $this->pages = $posts->whereTypeIs('pages')->with('type')->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('news', $this->news)->with('pages', $this->pages)->with('hello', 'TEST');
    }
}