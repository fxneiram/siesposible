@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Barrio
            <a href="{!! route('barrios.index') !!}" class="btn btn-default pull-right">Volver</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('barrios.show_fields')

                </div>
                <div class="row">
                    @foreach($barrio->votantes as $votante)
                        <div class="col-sm-3">
                            {{$votante->nombre}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
