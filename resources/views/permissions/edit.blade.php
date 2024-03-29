@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Permission
        </h1>
   </section>
   <div class="content">
       <div class="clearfix"></div>

       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($permission, ['route' => ['permissions.update', $permission->uuid], 'method' => 'patch']) !!}

                        @include('permissions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection