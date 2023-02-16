<?php

namespace App\View\Components;

use App\Models\BlogSingle;
use Illuminate\View\Component;

class blogComment extends Component
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
        $comment = BlogSingle::all();
        return view('components.blog-comment')->with([
            'comments'=>$comment
        ]);
    }
}
