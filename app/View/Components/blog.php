<?php

namespace App\View\Components;

use App\Models\Blog as ModelBlog;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;



class blog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $blogs = ModelBlog::orderBy('id', 'desc')->get();

        return view('components.blog')->with([
            'blogs'=>$blogs
        ]);
    }
}
