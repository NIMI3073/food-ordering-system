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
    public function destroy($id)
    {
        $deleteItem = Cart::where('id', $id)->first();
        $deleteItem->delete();
    }


    public function store(Request $request)
    {
       $validated = $request->validate([
            'menu_id'=>'string|exists:menu,id'
        ]);

      $cartItem =  Cart::where([
        'user_id' => 2,
        'menu_id' => $request->menu_id,
      ])->first();

      if($cartItem){
        $cartItem->units++;
        $cartItem->save();
      }else{
        $cartItem = Cart::create([
            'user_id' => 2,
            'menu_id' => $request->menu_id,
        ]);
      }
        return response()->json($cartItem);
      
}


//   public function cartItem(Request $request){
//         $cartItems = Cart::all();
//         return view('cart-dashboard/cart')->with([
//                     'items'=> $cartItems,
                    
//         ]);
//     }


    public function cartItems(Request $request){
       
    $cartItems = Cart::with(['menu'])->where('user_id', 2)->get();

    return view('cart-dashboard/cart')->with([
        'cartItems'=> $cartItems,
    ]);

    }


    
public function deleteItem(Request $request){
  
    $request->validate([
        'id' => 'required|integer|exists:carts,id'
    ]);
   
    $deleteItem = Cart::where('menu_id',$request->id)->first();
    $menuId = $deleteItem->menu_id;
 if($deleteItem){
    
    Menu::where('menu_id',$deleteItem->id)->delete();

   $deleteItem->delete(); 
 }
    
 return view('cart-dashboard.cart')->with([
    'items' => Cart::where('menu_id',$menuId)->get(),
    'message'=>'item deleted Successfully',

]);

}

}