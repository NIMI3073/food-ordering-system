<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        //      $request->validate([
        //             'id' => ['required', 'integer', Rule::exists('users', 'id')]
        //      ]);
        // $user = User::all();
        // return response('/order-user')->with([
        //     'index' => 1,
        //     'users' => $user,
        // ]);
           
        
                //  $request->validate([
                //     'id' => ['required', 'integer', Rule::exists('users', 'id')]
                  
                // ]);
                // $user =  User::where($request->id)->get();
                // return view('order-user')->with([
                //     'user' => $user,
                //     'index'=> 1,
                // ]);
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
    
        // $request->validate([
        //        'id' => 'string|required|exists:users,id',
        //        'email'=>'string|required'
        //      ]);
             
        //      $user = User::with(['order'])->where('email',$request->email)->get();
        
        // return view('user')->with([
        //     'users' =>$user,
        //     'index' => 1,
        // ]);
  


    }

}

