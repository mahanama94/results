@extends('templates.default')

@section('content')

    <div class ="row">
        <h3>About {{ $module->getModuleName() }} ( {{ $module->getModuleCode() }} ) </h3>

        <div class="col-lg-6">
            @include('module.partials.result')
        </div>

        <div class="col-lg-6">
            @include('module.partials.graph')
        </div>
    </div>

@endsection