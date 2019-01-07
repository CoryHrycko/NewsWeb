<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Post;
use Auth;
use Illuminate\Queue\RedisQueue; 

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedInUserId =  Auth::id();
        $posts= Post::all()->where('user_id', $loggedInUserId);
        return view('adminPanel.home',['posts'=>$posts]);
    }

    public function publicHomePage(){
        $posts = Post::paginate(10);

        return view('blog.home',['posts'=>$posts]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $postTitle= $request->title;
        $postBody= $request->body;
        $postUserId=Auth::id();

        $post->user_id =$postUserId;
        $post->title =$postTitle;
        $post->body=$postBody;

        $post->save();

        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        $post = Post::find($id);
        $data = array(
            'id' => $id,
            'poost'=>$post
    );

    Return view('blog.view_post',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post - Post::find($id);

        return view('adminPanel.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //

        if (isset($request->title)){
            $post->title = $request->title;
        }
        if (isset($request->body)){
            $post->body = $request->body;
        }
        $post->save();
        if (isset($request->editForm)){
            return redirect()->route('blog.index');
        }else{
            return redirect()->route('blog.index');
        }

        // return redirect()->
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        // return 'hello';
        $post = Post::find($id);

        $post ->delete;
        return redirect()->route('blog.index');
    }
}
