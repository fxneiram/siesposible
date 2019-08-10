@extends('default')
@section('content')
    @if (isset($errors) && count($errors) > 0)
        {!! form_errors($errors) !!}
    @endif
    <section class="login-form">
        {!! Form::open(['url' => '/login']) !!}
        <div class="form-group">
            {!! Form::label('email', 'Email o nombre de usuario:') !!}
            {!! Form::input('text','login', null, ['class'  =>"form-control", 'required'=>'required', 'placeholder'=>"email o nombre de uaurio"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña:') !!}
            {!! Form::password('password', ['class'=>"form-control", 'placeholder'=>"contraseña", 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::Submit('Acceder', ['class'=>"btn btn-primary btn-sm form-control"]) !!}
        </div>
        {!! Form::close() !!}
    </section>
@endsection