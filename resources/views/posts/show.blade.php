@extends('app')
 
@section('content')
                    <div class="thumbnail">
                        <div class="caption-full">
                            <h4 class="pull-right">{{ $post->nickname }}</h4>
                            <h4>{{ $post->title }}</h4>
                            
                            <p>{!! nl2br($post->post) !!}</p>
                        </div>
                        <div class="pull-right">
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) !!}
                                {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class'=>'alert-info']) !!}&nbsp;
                                {!! Form::submit('Delete', ['class'=>'alert-danger no-border']) !!}
                            {!! Form::close() !!}
                        </div>
                        <br>
                        <div class="ratings">
                            &nbsp;
                            <p class="pull-left">{{ $post->comments->count() }} reviews</p>
                        </div>
                    </div>


                    <div class="well">

                        <div class="text-right">
                            {!! link_to_route('posts.comments.create', 'Leave a Comment', $post->id, ['class'=>'btn btn-success']) !!}
                            {!! link_to_route('posts.index', 'Back to Posts', [], ['class'=>'btn btn-primary']) !!}
                        </div>

    @if ( $post->comments->count() )
        @foreach( $post->comments as $comment )
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                {{ $comment->nickname }}
                                <span class="pull-right">time</span>
                                <p>{!! nl2br($comment->comment) !!}</p>
                                <div class="pull-right">
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('posts.comments.destroy', $post->id, $comment->id))) !!}
                                        {!! link_to_route('posts.comments.edit', 'Edit', array($post->id, $comment->id), ['class'=>'alert-info']) !!}&nbsp;
                                        {!! Form::submit('Delete', ['class'=>'alert-danger no-border']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
        @endforeach
                    </div>
    @endif

@endsection