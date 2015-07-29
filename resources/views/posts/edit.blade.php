@extends('app')
 
@section('content')
					<p class="lead">Edit Post "{{ $post->title }}"</p>
					<div class="thumbnail">
	    				{!! Form::model($post, 
	    					[
	    						'method' => 'PATCH', 
	    						'route' => ['posts.update', $post->id], 
	    						'class' => ''
	    					]) 
	    				!!}
	        				@include('posts/partials/_form', 
	        				[
	        					'submit_text' => 'Edit Post',
	        				])
	    				{!! Form::close() !!}
	    			</div>
    				<a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Soft_Job</a>
@endsection