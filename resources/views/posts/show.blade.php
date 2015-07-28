@extends('app')
 
@section('content')
    <h2>{{ $post->title }}</h2>
    {{ $post->post }}

    @if ( !$post->comments->count() )
        Your post has no comments.
    @else
        <ul>
            @foreach( $post->comments as $comment )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.comments.destroy', $post->id, $comment->id))) !!}
                        <a href="{{ route('posts.comments.show', [$post->id, $comment->id]) }}">{{ $comment->comment }}</a>
                        (
                            {!! link_to_route('posts.comments.edit', 'Edit', array($post->id, $comment->id), array('class' => 'btn btn-info')) !!},
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('posts.index', 'Back to Posts') !!} |
        {!! link_to_route('posts.comments.create', 'Create comment', $post->id) !!}
    </p>
@endsection