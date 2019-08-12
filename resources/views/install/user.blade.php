<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI ES POSIBLE - Creación del usuario administrador</title>
    <!-- CSS -->
    @include('install.partials.styles')
</head>
<body class="login-page">
<div class="container">
    <div class="login-logo">
        <b>Marama</b> ERP
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-warning">
                        <h4>Creat usuario administrador</h4>
                    </div>
                    @if (count($errors) > 0)
                        {!! form_errors($errors) !!}
                    @endif
                    @if (Session::has('flash_notification.message'))
                        {!! message() !!}
                    @endif
                    {!! Form::open(['url'=>'/install/user']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control input-sm','required', 'placeholder' => 'nombre' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control input-sm','required', 'placeholder' => 'email' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('username', 'Nombre de usuario:') !!}
                        {!! Form::text('username', null, ['class' => 'form-control input-sm','required', 'placeholder' => 'nombre de usuario' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña:') !!}
                        {!! Form::password('password', ['class' => 'form-control input-sm','required','placeholder' => 'contraseña' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmar contraseña:') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control input-sm','required','placeholder' => 'contraseña' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-success next_btn']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('install.partials.scripts')
</body>
</html>
