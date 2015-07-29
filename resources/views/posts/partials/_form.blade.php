<div class="form-group">
    {!! Form::label('nickname', 'Nickname:', ['class'=>'col-sm-2 col-lg-2 col-md-2']) !!}
    {!! Form::text('nickname') !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class'=>'col-sm-2 col-lg-2 col-md-2']) !!}
    {!! Form::email('email') !!}
</div>
<div class="form-group">
    {!! Form::label('sex', 'Sex:', ['class'=>'col-sm-2 col-lg-2 col-md-2']) !!}
    {!! Form::radio('sex', 'male') !!} Male
    {!! Form::radio('sex', 'female') !!} Female
    {!! Form::radio('sex', 'other', true) !!} Other
</div>
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class'=>'col-sm-2 col-lg-2 col-md-2']) !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group">
    {!! Form::label('post', 'Post:', ['class'=>'col-sm-2 col-lg-2 col-md-2']) !!}
    {!! Form::textarea('post') !!}
</div>
<hr>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
