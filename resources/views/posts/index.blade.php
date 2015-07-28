@extends('app')
 
@section('content')
    <h2>Posts</h2>
 
    @if ( !$posts->count() )
        You have no posts
    @else
        <ul>
            @foreach( $posts as $post )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) !!}
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                        (
                            {!! link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('posts.create', 'Create Post') !!}
    </p>
@endsection
