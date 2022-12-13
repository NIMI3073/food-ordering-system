<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $headerData ="")
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
        return view('components.header')->with([
             // to display total number of items added to cart behind the cart icon
            'cartCount' =>auth()->check() ? Cart::where('status', 'in_cart')->where('user_id', auth()->id())->count() : 0,
        ]);
    }
}
