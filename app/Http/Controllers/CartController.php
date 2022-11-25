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


    public static function cartItems($token = null){
       //static is used when another instance of the constructor is not called  i.e "$this" is not been used//
    $cartItems = Cart::with(['menu'])
    ->where('status', 'in_cart')
    ->where('user_id', auth()->user()->id)
    ->get();

    return view('cart-dashboard/cart')->with([
        'cartItems'=> $cartItems,
        'total' => self::getCartTotal($cartItems),
        'unit'=>self::getItemUnits($cartItems),
        'token' => $token,
        
    ]);

    }

    public static function getCartTotal($cartItems) : int
    {
        //the total amount the the customer would page on cart
        $total = 0;
        foreach($cartItems as $item){
            $total+= $item->units * $item->menu->price + $item->menu->delivery_fee;
        }

        return $total;
    }

    public static function getItemUnits($cartItems){
        //to get to the numbers of item users added to the cart
        $unit = 0;
        foreach($cartItems as $itemNum){
            $unit+=$itemNum->units + $itemNum->menu->unit;
        }
        return $unit;
    }

    public function increaseItemOnCart(){
       
        // Cart::where('menu_id',request()->menu_id)->first()->units++;
        // return $this->cartItems();
    }

    public function increaseQuantity(Request $request)
    {
            Cart::where('menu_id',request()->menu_id)->update()->units++;
        return $this->cartItems();
    }

    
    }




