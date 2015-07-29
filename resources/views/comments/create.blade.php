@extends('app')
 
@section('content')
					<p class="lead">Create Comment for Post "{{ $post->title }}"</p>
					<div class="thumbnail">
					    {!! Form::model(new App\Comment, 
					    	[
					    		'route' => ['posts.comments.store', $post->id], 
					    		'class' => ''
					    	]) 
					    !!}
					        @include('comments/partials/_form', 
					        [
					        	'title' => $post->title,
					        	'submit_text' => 'Create Comment'
					        ])
					    {!! Form::close() !!}
					</div>
				    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Back to "{{ $post->title }}"</a>

@endsection