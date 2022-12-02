<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            'menu_id'=>'string|exists:menu,id',
            
        ]);

      $cartItem = Cart::where([
        'user_id' => auth()->user()->id,
        'menu_id' => $request->menu_id,
        'status' => 'in_cart'
      ])->first();

      if($cartItem){
        $cartItem->units++;
        $cartItem->save();
      }else{
        $cartItem = Cart::create([
            'user_id' => auth()->user()->id,
            'menu_id' => $request->menu_id,
            'group_id' => $this->generateGroupId()
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
        'groupId' => $cartItems->first()?->group_id,
        //json is used to merge two programming language 
        'userData' => json_encode([
            'email' => auth()->user()->email,
            'phone_number' => auth()->user()->phone,
            'name' => auth()->user()->name
        ])
        
    ]);

    }

    public static function getCartTotal($cartItems) : int
    {
        //the total amount the customer would page on cart
        $total = 0;
        foreach($cartItems as $item){
            $total+= $item->units * $item->menu->price + $item->menu->delivery_fee;
        }

        return $total;
    }

    public static function getItemUnits($cartItems){
        //to get the numbers of item users added to the cart
        $unit = 0;
        foreach($cartItems as $itemNum){
            $unit+=$itemNum->units + $itemNum->menu->unit;
        }
        return $unit;
    }

    public function increaseQuantity(Request $request)
    {
            Cart::where('menu_id',request()->menu_id)->update()->units++;
        return $this->cartItems();
    }


    public function paymentProcess(Request $request){
     
        $validated =$request->validate([
            'tx_ref'=> 'string|required',
            'transaction_id' =>'string|required',
      
        ]);

        $transactionId = $validated['transaction_id'];

        $groupId = explode('_', $validated['tx_ref'])[0];
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->get("https://api.flutterwave.com/v3/transactions/$transactionId/verify")->object();

        // dd($response);

        // Check Transaction Status
        if(!$response->status === 'success'){
           return view('payment')->with([
            'message'=>'Transaction failed'
           ]);
        }
    

        // Calculate Price of Cart Items related to Group Id
            $cartItems = Cart::where('group_id', $groupId)->get();

            $cartTotal = CartController::getCartTotal($cartItems);

        // Check if Cart Total === Amount Paid
        if($cartTotal !== $response->data->amount)
        {
        return view('payment')->with([
            'error'=>'error in transaction'
        ]);
        }
        
        Payment::create([
            'user_id' => auth()->id(),
            'transaction_id' => $transactionId,
            'tx_ref' =>$request->tx_ref, 
            'group_id' =>$groupId,
            'amount' => $cartTotal,
            'status' => 'paid'
        ]);

        // Update Status of Cart Items related to Group ID to paid
        Cart::where('group_id', $groupId)->update([
            'status'=>'paid'
        ]);

        // Redirect User to Desired Success Page
        return view('payment')->with([
            'index'=>1,
            'status'=>'paid',
            'payments'=>Payment::where('user_id', auth()->id())->get()
            
        ]);
    
    }
    
    public function generateGroupId(){
    $groupId =  substr(str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);

    if( Cart::where('group_id', $groupId)->exists()){
        return $this->generateGroupId();
    }

    
    $cartItem = Cart::where('user_id', auth()->id())->where('status','in_cart')->first('group_id');

    return is_null($cartItem) ? $groupId : $cartItem->group_id;
  }

//to get all the cart items on list
  public function cartList(){
    $item = Cart::all();
    return view('super-admin.cart-list')->with([
        'index'=>1,
        'items'=>$item,
        
    ]);
}


public function paymentList(){
    $payment = Payment::where('status', 'paid')
    ->get();
    return view('super-admin.payment-list')->with([
        'index'=>1,
        'payments'=>$payment,
    ]);
}

public function paymentInfo(Request $request){
    $validated =$request->validate([
        'group_id'=>'string|required|exists:carts,group_id',
    ]);
    $info = Cart::with(['menu'])->where('group_id',$request->group_id)->get();
    return view('super-admin.payment-info')->with([
        'index'=>1,
        'infos'=>$info,
    ]);
}

public function paymentStatusInfo(Request $request){
    $validated =$request->validate([
        'group_id'=>'string|required|exists:carts,group_id',
    ]);
    $menu = Cart::with(['menu'])->where('group_id',$request->group_id)->get();
    return view('userPaymentInfo')->with([
        'index'=>1,
        'status'=>'paid',
        'menu'=>$menu
    ]);

}

  }
    
    



