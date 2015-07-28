@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('posts.show', $post->title, [$post->id]) !!} -
        {{ $comment->title }}
    </h2>
 
    {{ $comment->comment }}
@endsection