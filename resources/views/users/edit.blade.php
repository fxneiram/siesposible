@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            User
        </h1>
   </section>
   <div class="content">
       <div class="clearfix"></div>

       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['users.update', $user->uuid], 'method' => 'patch']) !!}

                        @include('users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection