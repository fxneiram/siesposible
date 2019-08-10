@extends('app')

@section('content')
    <section class="col-md-12 content-header">
        <h1>
            Permission
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('permissions.show_fields')
                    <a href="{!! route('permissions.index') !!}" class="btn btn-outline-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
