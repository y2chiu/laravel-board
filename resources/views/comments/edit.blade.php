@extends('app')
 
@section('content')
    <h2>Edit Comment "{{ $comment->id }}"</h2>
 
    {!! Form::model($comment, ['method' => 'PATCH', 'route' => ['posts.comments.update', $post->id, $comment->id]]) !!}
        @include('comments/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection