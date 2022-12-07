<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $validated =$request->validate([
            'cover_image'=>['required','mimes:jpg,png,jpeg','max:2048'],
            'date'=> 'string|required',
            'content'=>'string|required',
            'list' => 'string|required',
        ]);

        $upload = $request->file('cover_image')->store('public/images');
        $full_path =explode("/", $upload);
      $validated['cover_image'] = end($full_path);

      Blog::create($validated);
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
        $request->validate([
            'content' =>'string|required',
        ]);
        Blog::where('content',$request->content)->update();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::where('id',request()->id)->first()->delete();
        return $delete;
    }
    
    public function showBlog(Request $request){
        $request->validate([
            'content'=>'string|required'
        ]);
        $blog = Blog::where('content',$request->content)->get();
         return view('index')->with([
            'blogs'=>$blog
         ]);
         
    }
}
