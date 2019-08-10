<!DOCTYPE html><html><head>    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>Marama ERP - Detalles de la base de datos</title>    @include('install.partials.styles')</head><body class="login-page">	<div class="container">		<div class="login-logo">			<b>Marama</b> ERP		</div>		<div class="panel">			<div class="panel-body">				<div class="row">					<div class="col-md-12">						<div class="callout callout-warning">							<h4>Detalles de la base de datos</h4>						</div>						@if (count($errors) > 0)						{!! form_errors($errors) !!}						@endif						@if (Session::has('flash_notification.message'))						{!! message() !!}						@endif						{!! Form::open(['url'=>'/install/database']) !!}						<div class="form-group">							{!! Form::label('hostname', 'Servidor:') !!}							{!! Form::text('hostname', null, ['class' => 'form-control input-sm','required', 'placeholder' => 'servidor' ]) !!}						</div>						<div class="form-group">							{!! Form::label('database', 'Base de datos:') !!}							{!! Form::text('database', null, ['class' => 'form-control input-sm','required','placeholder' => 'base de datos' ]) !!}						</div>						<div class="form-group">							{!! Form::label('username', 'Nombre de usuario:') !!}							{!! Form::text('username', null, ['class' => 'form-control input-sm','required','placeholder' => 'nombre de usuario' ]) !!}						</div>						<div class="form-group">							{!! Form::label('password', 'Contraseña:') !!}							{!! Form::password('password', ['class' => 'form-control input-sm','placeholder' => 'contraseña' ]) !!}						</div>						<div class="form-group">							{!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-success next_btn']) !!}						</div>						{!! Form::close() !!}					</div>				</div>			</div>		</div></div>@include('install.partials.scripts')</body></html>