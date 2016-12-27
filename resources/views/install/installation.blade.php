@extends('layouts.install')

@section('content')

    @include('install.steps', ['steps' => [
        'welcome' => 'selected done',
        'requirements' => 'selected done',
        'permissions' => 'selected done',
        'database' => 'selected done',
        'installation' => 'selected'
    ]])

    {!! Form::open(['route' => 'install.install']) !!}
        <div class="step-content">
            <h3>Instalacion</h3>
            <hr>
            <p>Este Sistema está listo para ser instalado!</p>
            <p>Antes de proceder, proporcione el nombre de su Sistema a continuación:</p>
            <div class="form-group">
                <label for="app_name">Nombre de la Aplicación</label>
                <input type="text" class="form-control" id="app_name" name="app_name" value="Citrux">
            </div>
            <button class="btn btn-green pull-right" data-toggle="loader" data-loading-text="Installing" type="submit">
                <i class="fa fa-play"></i>
                Instalar
            </button>
            <div class="clearfix"></div>
        </div>
    {!! Form::close() !!}
@stop