@extends('modal')

@section('content')
   <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Apoyo</h5>
            </div>
            {!! Form::model($apoyo, ['route' => ['apoyos.update', $apoyo->uuid], 'method' => 'patch']) !!}
           <div class="modal-body">
                @include('apoyos.fields')
           </div>
           <div class="modal-footer">
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection