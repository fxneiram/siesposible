@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1><i class="fa fa-cogs"></i>Apoyos</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">
                    <div class="box-tools ">
                        <a href="{{ route('apoyos.create') }}" class="btn btn-primary btn-xs pull-right" data-toggle="ajax-modal"></i>Crear</a>
                    </div>
                 </h3>
             </div>

            <div class="box-body">
                    @include('apoyos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
