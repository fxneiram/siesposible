@extends('modal')

@section('content')
   <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Evento</h5>
            </div>
            {!! Form::model($evento, ['route' => ['eventos.update', $evento->uuid], 'method' => 'patch']) !!}
           <div class="modal-body">
                @include('eventos.fields')
           </div>
           <div class="modal-footer">
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection