{!! Form::open(['route' => ['casas.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('casas.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('casas.edit', $id) }}" class='btn btn-default btn-xs' data-toggle="ajax-modal">
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Desea continuar con esta accion?')"
    ]) !!}
</div>
{!! Form::close() !!}
