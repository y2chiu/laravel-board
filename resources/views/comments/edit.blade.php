@extends('app')
 
@section('content')
					<p class="lead">Edit Comment</p>
					<div class="thumbnail">
						{!! Form::model($comment, 
							[
								'method' => 'PATCH', 
								'route' => ['posts.comments.update', $post->id, $comment->id]
							]) 
						!!}
							@include('comments/partials/_form', 
							[
					        	'title' => $post->title,
								'submit_text' => 'Edit Comment'
							])
						{!! Form::close() !!}
					</div>
					<a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Back to "{{ $post->title }}"</a>
@endsection