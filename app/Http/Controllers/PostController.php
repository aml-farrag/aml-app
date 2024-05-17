<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::get(); 
        return view('posts.posts',['post'=>$posts]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.addPost");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $post= new post();  
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     */
    //public function show(Post $post)
    public function show(string $id){
        $post=Post::findOrFail($id);
        return view ('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=post::findOrFail($id);
        return view ('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
   // public function update(Request $request, Post $post)
    public function update(Request $request,string $id){
        Post::where('id',$id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect('/posts');
    }
        //
    

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(Post $post)
    public function destroy(Request $request)
    {
        $id=$request->id;
        Post::where('id',$id)->delete();
        return redirect('posts');
    }
    public function deletecat(string $id){
       
         $post=Post::findOrFail($id)->delete();
         return redirect('posts');
     }
}
