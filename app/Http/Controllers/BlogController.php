<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogSingle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

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
            'title' => 'string|required',
            'content'=>'string|required',
          
        ]);
      
        $upload = $request->file('cover_image')->store('public/images');
        $full_path =explode("/", $upload);
      $validated['cover_image'] = end($full_path);
      $validated['slug'] = Str::slug($request->title);
      Blog::create($validated);
      return response([
          "message" => '  Successful'
      ]);
      
      return redirect()->route('super-admin.blog-list');
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
            'id' => 'integer|required|exists:blog,id',
            'content' => 'string|required|'
        ]);
        return  Blog::find($request->id)
            ->update(
                [
                    'content' => $request->content
                ]
            );

        return response([
            'alert'=>'successful'
        ]);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id){
        $deleteTodo = Blog::where('id', $id)->first();
        $deleteTodo->delete();  

        return view('super-admin.blog-list');
    }
   
    
    

    public function showBlog(Request $request){
      $blogs = Blog::all();
      return view('index')->with([
        'blogs'=>$blogs
      ]);
         
    }

 
    public function getBlogList(Request $request){
        $blog= Blog::all();
        return view('super-admin.blog-list')->with([
            'index'=>1,
            'blogLists'=>$blog,
        ]);
        
    }


    public function deleteContent(Request $request){
        {
            $request->validate([
                'id'=> 'required|integer|exists:blog,id',
            
            ]);
           
            $deleteContent = Blog::where('id',$request->id)->first();
            $id = $deleteContent->id;
         if($deleteContent){
            
       
            Blog::where('id',$deleteContent->id)->delete();
        
           $deleteContent->delete(); 
         }
            
         return view('super-admin.blog-list')->with([
            'blogList'=>$id,
            'contents' => Blog::where('id',$id)->get(),
        ]);
    }
}


public function editContentForm (Request $request){
    $request->validate([
        'id'=> 'required|integer|exists:blog,id'
    ]);
    $editContent =  Blog::where('id',$request->id)->first();
    return view('super-admin.edit-content')->with([
        'content' => $editContent
       
    ]);

}


public function editContent(Request $request)
{
    $request->validate([
        'id' => 'integer|required|exists:blog,id',
        'content' => 'string|required'
    ]);
    $editContent = Blog::where('id',$request->id)->first();
    // dd($editContent);
    if ($editContent) {
        $editContent->update(
            ['content' => $request->content]
        );
        return response([
            // 'content' => $editContent,
            'message' => 'successful'
        ]);
    
    }else{
        return response([
            'content'=> null,
            'alert' => 'Unknown error occurred'
        ], Response::HTTP_UNAUTHORIZED);
    }         

   return redirect()->route('super-admin.blog-list',['id'=>$request->id]);
}


public function postBlogComment( Request $request){
    $validated = $request->validate([
        'name'=>'string|required',
        'email' =>'string|required',
        // 'url'=>'string',
        'message'=>'string|required'
    ]);

    BlogSingle::create($validated);
    //when api is being used you cannot used redirect, reload will be handle by javascript
    return response([
        'message'=>'Comment posted successfully'
    ]);
    // return redirect()->back()->with('message','Comment posted successfully !');
    // return response()->json(['code'=>200, 'message'=>'Comment posted successfully','data' => $validated], 200);
  
    // return redirect()->back();
}

public function getBlogs (Request $request){
    $request->validate([
        'id'=> 'required|integer|exists:blog,id'
    ]);
    $blogs=  Blog::where('id',$request->id)->first();
    return view('super-admin.blog-single')->with([
        'blog' => $blogs
       
    ]);

}

public function getPost (string $slug){

    $blogs=  Blog::where('slug',$slug)->firstOrFail();
    return view('super-admin.blog-single')->with([
        'blog' => $blogs
       
    ]);

}



}