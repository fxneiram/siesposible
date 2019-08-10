@extends('modal')

@section('content')
   <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Lider</h5>
            </div>
            {!! Form::model($lider, ['route' => ['liders.update', $lider->id], 'method' => 'patch']) !!}
           <div class="modal-body">
                @include('liders.fields')
           </div>
           <div class="modal-footer">
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection