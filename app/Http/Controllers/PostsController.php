<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Input;
use Redirect;

class PostsController extends Controller
{
    protected $rules = [
        'nickname'  => ['required', 'min:3'],
        'email'     => ['required'],
        'title'     => ['required'],
        'post'      => ['required', 'min:10'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        
        $input = Input::all();
        Post::create($input);
 
        return Redirect::route('posts.index')->with('message', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $post = Post::find($id);
        $post->update($input);
 
        return Redirect::route('posts.show', $post->id)->with('message', 'Post updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
 
        return Redirect::route('posts.index')->with('message', 'Post deleted.');
    }
}
