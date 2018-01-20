<?php

namespace App\Http\ViewComposers;

use App\PostType;
use Illuminate\View\View;

class NavigationComposer
{
    /**
     * @var PostType
     */
    protected $post_types;

    /**
     * NavigationComposer constructor.
     * @param PostType $types
     */
    public function __construct(PostType $types)
    {
        $this->post_types = $types;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('post_types', $this->post_types->get());
    }
}