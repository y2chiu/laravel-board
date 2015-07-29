@extends('app')
 
@section('content')
                    <p class="lead">Posts of Soft_Job</p>
                    <div class="text-right">
                        {!! link_to_route('posts.create', 'Create Post', [], ['class' => 'btn btn-success']) !!}</a>
                    </div>
 
    @if ( !$posts->count() )
                    <div class="flash alert-info"><h4>There are no posts.</h4></div>
    @else
        @foreach( $posts as $post )
                    <div class="col-sm-10 col-lg-10 col-md-10">
                        <div class="thumbnail">
                            <h4 class="post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->id.". ".$post->title }}</a>
                            </h4>
                            <div class="pull-right">
                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) !!}
                                    {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class'=>'alert-info']) !!}&nbsp;
                                    {!! Form::submit('Delete', ['class'=>'alert-danger no-border']) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class="ratings">
                                <p>{{ $post->comments->count() }} comments</p>
                            </div>
                        </div>
                    </div>
        @endforeach
                    <div class="col-sm-10 col-lg-10 col-md-10">
                        {!! $posts->render() !!}
                    </div>
    @endif

@endsection
