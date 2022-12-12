<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file'=>['required','mimes:jpg,png,jpeg','max:2048'],
            'type'=>['string','required', Rule::in(['Breakfast','Lunch','Dinner','snacks','wine','drinks'])],
            'name_of_menu'=>['string','required'],
            'description' =>['string','required'],
            'price'=>['integer','required'],
           
        ]);
      
      $upload = $request->file('file')->store('public/images');
        $full_path =explode("/", $upload);
      $validated['file'] = end($full_path);
      
         Menu::create($validated);
         return response([
             "message" => '  Successful'
         ]);

      
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function menuList(Request $request){

        $menus = Menu::all();
        return response([
                    'menus'=> $menus,
                    
        ]); 
    }



    public function menuGallery(Request $request){
        $breakfast= Menu::where('type','Breakfast')->get();
        $lunch = Menu::where('type','Lunch')->get();
        $dinner = Menu::where('type','Dinner')->get();
        $snacks = Menu::where('type','snacks')->get();
        $wine = Menu::where('type','wine')->get();
        $drinks = Menu::where('type','drinks')->get();
        return view('menu-gallery')->with([
            'breakfast'=>$breakfast,
            'lunch'=>$lunch,
            'dinner' =>$dinner,
            'snack' =>$snacks,
            'wine'=> $wine,
            'drink'=>$drinks
        ]);
    }


   
}
