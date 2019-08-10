@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Lider
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('liders.show_fields')
                    <a href="{!! route('liders.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
