<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Egulias\EmailValidator\Result\Reason\Reason;

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
            'title' => 'string|required',
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
            'blogList'=>$deleteContent,
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

   
}

}