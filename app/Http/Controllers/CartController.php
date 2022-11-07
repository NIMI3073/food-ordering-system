<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\menu;
use Illuminate\Http\Request;

class CartController extends Controller
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
   
    public function destroy() 
    {
        Cart::where('menu_id', request()->menu_id)->first()->delete();
       return $this->cartItems();
    }


    public function store(Request $request)
    {
       $validated = $request->validate([
            'menu_id'=>'string|exists:menu,id'
        ]);

      $cartItem = Cart::where([
        'user_id' => auth()->user()->id,
        'menu_id' => $request->menu_id,
      ])->first();

      if($cartItem){
        $cartItem->units++;
        $cartItem->save();
      }else{
        $cartItem = Cart::create([
            'user_id' => auth()->user()->id,
            'menu_id' => $request->menu_id,
        ]);
      }
        return response()->json($cartItem);
      
}


    public function cartItems(){
       
    $cartItems = Cart::with(['menu'])->where('user_id', auth()->user()->id)->get();

    return view('cart-dashboard/cart')->with([
        'cartItems'=> $cartItems,
    ]);

    }




}