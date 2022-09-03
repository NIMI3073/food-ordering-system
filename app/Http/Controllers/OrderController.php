<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'email'=>'string|exists:order,email',
            // 'created_at'=>'timestamp|exists:order'
        ]);

        $order =Order::where('email', $request->email)->get();
        return response([
                   'order'=> $order,
                    'index'=> 1,
                 ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('order');
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
            'name'=>'string|required',
            'email'=>'string|required',
            'phone_number'=>'string|required',
            'address'=>'string|required',
            'no_of_package'=> 'string|required',

        ]);
        Order::create($validated);
       return response ([
            'message' => 'successful'
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

    
// public function listOfOrders(Request $request){ 
//     $request->validate([
//         'id' => 'string|required|exists:order,id'
//     ]);
//     return view('order-list')->with([
//         'orders'=> Order::where($request->id)->get(),
//         'index'=> 1,
//     ]);
// }


// public function orders($id)
// {
// Order::where('id', $id)->get();
    
// }

}
