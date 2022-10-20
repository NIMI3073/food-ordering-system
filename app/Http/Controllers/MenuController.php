<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
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
            'type'=>['string','required', Rule::in(['african','foregin'])],
            'file'=>['file','required','mimes:jpg,png,jpeg','max:2048'],
            'name_of_menu'=>['string','required'],
            'price'=>['string','required'],
           
        ]);

      $validated['file'] = $request->file('file')->store('images');

        // dd($validated);
//    $validated['file'] = Storage::putFile('images', $request->file('public'));
     
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
                    'index'=> 1,
                    'menus'=> $menus,
                    
        ]);
    }
}
