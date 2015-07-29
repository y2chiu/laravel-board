@extends('app')
 
@section('content')
					<p class="lead">Create Post</p>
					<div class="thumbnail">
					    {!! Form::model(new App\Post, 
					    	[
					    		'route' => ['posts.store']
					    	]) 
					    !!}
					        @include('posts/partials/_form', 
					        [
					        	'submit_text' => 'Create Post'
					        ])
					    {!! Form::close() !!}
					</div>
    				<a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Soft_Job</a>
@endsection