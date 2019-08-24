<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $casa->id !!}</p>
</div>

<!-- Nombre Cuidador Field -->
<div class="form-group">
    {!! Form::label('nombre_cuidador', 'Nombre Cuidador:') !!}
    <p>{!! $casa->nombre_cuidador !!}</p>
</div>

<!-- Telefono Cuidador Field -->
<div class="form-group">
    {!! Form::label('telefono_cuidador', 'Telefono Cuidador:') !!}
    <p>{!! $casa->telefono_cuidador !!}</p>
</div>

<!-- Capacidad Personas Field -->
<div class="form-group">
    {!! Form::label('capacidad_personas', 'Capacidad Personas:') !!}
    <p>{!! $casa->capacidad_personas !!}</p>
</div>

<!-- Gps Field -->
<div class="form-group">
    {!! Form::label('gps', 'Gps:') !!}
    <p>{!! $casa->gps !!}</p>
</div>

<!-- Numero Casa Field -->
<div class="form-group">
    {!! Form::label('numero_casa', 'Numero Casa:') !!}
    <p>{!! $casa->numero_casa !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $casa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $casa->updated_at !!}</p>
</div>

