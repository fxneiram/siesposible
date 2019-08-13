@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Role
        </h1>
   </section>
   <div class="content">
       <div class="clearfix"></div>
       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->uuid], 'method' => 'patch']) !!}

                        @include('roles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection