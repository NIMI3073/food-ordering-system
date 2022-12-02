<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu as MenuModel;

class menu extends Component
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
        $breakfast= MenuModel::where('type','Breakfast')->get();
        $lunch = MenuModel::where('type','Lunch')->get();
        $dinner = MenuModel::where('type','Dinner')->get();
        $snacks = MenuModel::where('type','snacks')->get();
        $wine = MenuModel::where('type','wine')->get();
        $drinks = MenuModel::where('type','drinks')->get();
        return view('components.menu')->with([
            'breakfast' =>$breakfast,
            'lunch' => $lunch,
            'dinner'=>$dinner,
            'snack'=>$snacks,
            'wine'=>$wine,
            'drink'=>$drinks,
        
        ]);
    }
}
