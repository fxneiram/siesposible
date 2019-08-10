@extends('modal')
@section('content')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Votante</h5>
            </div>
            {!! Form::open(['route' => [ 'votantes.store'], 'class' => 'ajax-submit']) !!}
            <div class="modal-body">
                @if (count($errors) > 0)
                {!! form_errors($errors) !!}
                @endif
                @include('votantes.fields')
            </div>
            <div class="modal-footer">
            {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection