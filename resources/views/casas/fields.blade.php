<!-- Nombre Cuidador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_cuidador', 'Nombre Cuidador:') !!}
    {!! Form::text('nombre_cuidador', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Cuidador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_cuidador', 'Telefono Cuidador:') !!}
    {!! Form::text('telefono_cuidador', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Casa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_casa', 'Numero Casa:') !!}
    {!! Form::number('numero_casa', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Casa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidad_personas', 'Capacidad personas:') !!}
    {!! Form::number('capacidad_personas', null, ['class' => 'form-control']) !!}
</div>

<!-- Gps Field -->
<div class="form-group col-sm-12">
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('casas.index') !!}" class="btn btn-danger">Cancelar</a>
</div>
