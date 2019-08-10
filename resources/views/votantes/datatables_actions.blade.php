{!! Form::open(['route' => ['votantes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('votantes.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('votantes.edit', $id) }}" class='btn btn-default btn-xs' data-toggle="ajax-modal">
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Desea continuar con esta accion?')"
    ]) !!}
</div>
{!! Form::close() !!}
