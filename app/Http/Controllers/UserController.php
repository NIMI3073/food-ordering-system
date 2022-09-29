<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
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

            'name'=>'string|required',
            'email' =>'string|required',
            'phone'=>'string|required',
            'password'=>'string|required|confirmed|min:6'

        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        // return view('register')->with([
        //     'data'=>$user,
        //     'message'=>'successful'
        // ]);
        if($user){
             return response([
           'data'=> $user,
           'message'=> 'Registration complete'
         ]);
        }else{
            return response([
                'data'=> null,
                'message' => 'Unknown error occurred'
            ], Response::HTTP_UNAUTHORIZED);
        }

       

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

    



    public function listOfUsers(Request $request){ 
    $request->validate([
        'id' => 'string|required|exists:user,id'
    ]);
    return view('order-list')->with([
        'orders'=> User::where($request->id)->get(),
        'index'=> 1,
    ]);
}
    }

