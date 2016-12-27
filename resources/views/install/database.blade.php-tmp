@extends('layouts.install')

@section('content')

    @include('install.steps', ['steps' => [
        'welcome' => 'selected done',
        'requirements' => 'selected done',
        'permissions' => 'selected done',
        'database' => 'selected'
    ]])

    @include('partials.messages')

    {!! Form::open(['route' => 'install.installation']) !!}
        <div class="step-content">
            <h3>Informacion De La Base De Datos</h3>
            <hr>
            <div class="form-group">
                <label for="host">Host</label>
                <input type="text" class="form-control" id="host" name="host" value="{{ old('host') }}">
                <small>Servidor. Por lo general, debe introducir localhost.</small>
            </div>
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                <small>Su nombre de usuario de su DB.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small>Contraseña de la base de datos.</small>
            </div>
            <div class="form-group">
                <label for="database">Nombre De La Base De Datos</label>
                <input type="text" class="form-control" id="database" name="database"  value="{{ old('database') }}">
                <small>Nombre de la base de datos donde se deben crear las tablas.</small>
            </div>
            <div class="form-group">
                <label for="prefix">Prefijo Para Las Tablas</label>
                <input type="text" class="form-control" id="prefix" name="prefix" value="{{ old('prefix') }}">
                <small>Prefijo para poner delante de nombres de tabla de base de datos. Puede dejarlo en blanco si lo desea</small>
            </div>
            <button class="btn btn-green pull-right">
                Siguiente
                <i class="fa fa-arrow-right"></i>
            </button>
            <div class="clearfix"></div>
        </div>
    {!! Form::close() !!}

@stop