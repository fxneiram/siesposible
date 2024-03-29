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
    {!! Form::number('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio_id', 'Barrio:') !!}
    {!! Form::select('barrio_id', $barrios, null, ['class' => 'form-control  select2']) !!}
</div>

<!-- Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacimiento', 'Nacimiento:') !!}
    {!! Form::date('nacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sector', 'Sector:') !!}
    {!! Form::select('sector', $sectores, null, ['class' => 'form-control select']) !!}
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
<div class="form-group col-sm-12" id="map_for_manual_position">
    <div id="map_field"></div>
</div>

<!-- Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lider_id', 'Lider:') !!}
    {!! Form::select('lider_id', $lideres, null, ['class' => 'form-control  select2']) !!}
</div>

<!-- Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', ['M'=>'Masculino','F'=>'Femenino','O'=>'Otro'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Voto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_voto', 'Tipo Voto:') !!}
    {!! Form::select('tipo_voto', $tipo_voto, null, ['class' => 'form-control  select2']) !!}
</div>

<!-- Tipo Voto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intencion_voto', 'Intención de Voto:') !!}
    {!! Form::select('intencion_voto', $intencion_voto, null, ['class' => 'form-control  select2']) !!}
</div>

<!-- Tipo Voto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evento', 'Evento:') !!}
    {!! Form::select('evento', $eventos, null, ['class' => 'form-control select2']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('apoyos', 'Apoyos:') !!}
    {!! Form::select('apoyos[]', $apoyos2, null, ['class' => 'form-control select2', 'multiple'=>'true']) !!}
</div>

<script>
    $(document).ready(function () {
        console.log("hola");
        $('.select2').select2({width: '100%', height: '39px'});
    });
</script>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('votantes.index') !!}" class="btn btn-danger">Cancelar</a>
</div>
