<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
    
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request->validate([
            'id'=>'integer|exists:order,id',
        ]);
       
        $order = Order::all();
        return response([
                    'index'=> 1,
                    'order'=> $order,
                    
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
            'type_of_meal' => 'string|required',
            'no_of_package'=> 'string|required',
            

        ]);
        Order::create($validated);
       return response ([
            'message' => 'successful',
            'status' => 'submitted',
        ]);


        // $submission = Submission::with(['assignment'])
        // ->where('assignment_id', $request->assignment_id)
        // ->where('user_id', auth()->user()->id)
        // ->first();
        // if ($submission) {
        //     return response([
        //       $submission->update(['answer' => $request->answer]), 
        //       'alert'=> 'Assignment submitted successfully'
        //     ]);
            
        // } else {
        //     return response([
        //       $submission =  Submission::create([
        //         'assignment_id' => $request->assignment_id,
        //         'answer' => $request->answer,
        //         'score_obtained' => 0,
        //         'status' => 'submitted',
        //         'user_id'=> auth()->user()->id,
        //         'alert' => 'Unknown error occurred'
        //       ], Response::HTTP_UNAUTHORIZED) 
        // ]);
            
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


}
