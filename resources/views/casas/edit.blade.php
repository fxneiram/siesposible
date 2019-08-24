@extends('modal')

@section('content')
   <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Casa</h5>
            </div>
            {!! Form::model($casa, ['route' => ['casas.update', $casa->id], 'method' => 'patch']) !!}
           <div class="modal-body">
                @include('casas.fields')
           </div>
           <div class="modal-footer">
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection