<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio_id', 'Barrio Id:') !!}
    {!! Form::select('barrio_id', $barrios, null, ['class' => 'form-control']) !!}
</div>

<!-- Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacimiento', 'Nacimiento:') !!}
    {!! Form::date('nacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Gps Field -->
<div class="form-group col-sm-6">
    <label>Gps:</label>
    <div class="input-group add-on">
        <input type="text" class="form-control" placeholder="Pos" name="gps" id="gps">
        <div class="input-group-btn">
            <button onclick="getPosition();return false;" class="btn btn-default" id="find_btn"><i
                        class="glyphicon glyphicon-map-marker"></i></button>
        </div>
    </div>
</div>

<!-- Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sector', 'Sector:') !!}
    {!! Form::select('sector', $sectores, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Voto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_voto', 'Tipo Voto:') !!}
    {!! Form::select('tipo_voto', $tipo_voto, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Voto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intencion_voto', 'Intención de Voto:') !!}
    {!! Form::select('intencion_voto', $intencion_voto, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('votantes.index') !!}" class="btn btn-danger">Cancelar</a>
</div>
