@extends('layouts.install')

@section('content')

    @include('install.steps', ['steps' => ['welcome' => 'selected']])

    <div class="step-content">
        <h3>Bienvenido</h3>
        <hr>
        <p>Estos pasos le guiarán a través del proceso de instalación de pocos pasos.</p>
        <p>Cuando termine este proceso de instalación, podrá
           Iniciar sesión y administrar sus usuarios de inmediato! </p>
        <br>
        <a href="{{ route('install.requirements') }}" class="btn btn-green pull-right" type="button">
            Siguiente
            <i class="fa fa-arrow-right"></i>
        </a>
        <div class="clearfix"></div>
    </div>
@stop