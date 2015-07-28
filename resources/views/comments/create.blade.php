@extends('app')
 
@section('content')
    <h2>Create Comment for Post "{{ $post->id }}"</h2>
 
    {!! Form::model(new App\Comment, ['route' => ['posts.comments.store', $post->id], 'class'=>'']) !!}
        @include('comments/partials/_form', ['submit_text' => 'Create Comment'])
    {!! Form::close() !!}
@endsection