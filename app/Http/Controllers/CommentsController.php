<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Redirect;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $post_id
     * @return Response
     */
    public function index($post_id)
    {
        $post = Post::find($post_id);
        return view('comments.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $post_id
     * @return Response
     */
    public function create($post_id)
    {
        $post = Post::find($post_id);
        return view('comments.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $post_id
     * @return Response
     */
    public function store($post_id)
    {
        $post = Post::find($post_id);
        $input = Input::all();
        $input['post_id'] = $post->id;
        Comment::create($input);
 
        return Redirect::route('posts.show', $post->id)->with('message', 'Comments created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $post_id
     * @param  int  $comment_id
     * @return Response
     */
    public function show($post_id, $comment_id)
    {
        $post = Post::find($post_id);
        $comment = Comment::find($comment_id);
        return view('comments.show', compact('post', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $post_id
     * @param  int  $comment_id
     * @return Response
     */
    public function edit($post_id, $comment_id)
    {
        $post = Post::find($post_id);
        $comment = Comment::find($comment_id);
        return view('comments.edit', compact('post', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $post_id
     * @param  int  $comment_id
     * @return Response
     */
    public function update($post_id, $comment_id)
    {
        $post = Post::find($post_id);
        $comment = Comment::find($comment_id);
        $input = array_except(Input::all(), '_method');
        $comment->update($input);
 
        return Redirect::route('posts.comments.show', [$post->id, $comment->id])->with('message', 'Comment updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $post_id
     * @param  int  $comment_id
     * @return Response
     */
    public function destroy($post_id, $comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->delete();
 
        return Redirect::route('posts.show', $post->id)->with('message', 'Comment deleted.');
    }
}
