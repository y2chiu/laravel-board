<div class="form-group">
    {!! Form::label('nickname', 'Nickname:') !!}
    {!! Form::text('nickname') !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email') !!}
</div>
<!--
<div class="form-group">
    {!! Form::label('sex', 'Sex:') !!}
    {!! Form::radio('sex', 'male') !!} Male
    {!! Form::radio('sex', 'female') !!} Female
    {!! Form::radio('sex', 'other', true) !!} Other
</div>
-->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>