@extends('modal')

@section('content')
   <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Barrio</h5>
            </div>
            {!! Form::model($barrio, ['route' => ['barrios.update', $barrio->uuid], 'method' => 'patch']) !!}
           <div class="modal-body">
                @include('barrios.fields')
           </div>
           <div class="modal-footer">
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection