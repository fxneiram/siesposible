@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Casa
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('casas.show_fields')
                    <a href="{!! route('casas.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
