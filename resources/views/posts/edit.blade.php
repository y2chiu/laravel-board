@extends('app')
 
@section('content')
    <h2>Edit Post</h2>
 
    {!! Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id]]) !!}
        @include('posts/partials/_form', ['submit_text' => 'Edit Post'])
    {!! Form::close() !!}
@endsection