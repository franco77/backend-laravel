@extends('layouts.install')

@section('content')

    @include('install.steps', ['steps' => ['welcome' => 'selected done', 'requirements' => 'selected']])

    @if (! $allLoaded)
        <div class="alert alert-danger">
            <strong>¡Oh, Upppsss!</strong> Su sistema no cumple con los requisitos. Tienes que arreglarlos para continuar.
        </div>
    @endif

    <div class="step-content">
        <h3>Requisitos del sistema</h3>
        <hr>
        <ul class="list-group">
            @foreach ($requirements as $extension => $loaded)
            <li class="list-group-item {{ ! $loaded ? 'list-group-item-danger' : '' }}">
                {{ $extension }}
                @if ($loaded)
                    <span class="badge badge-success"><i class="fa fa-check"></i></span>
                @else
                    <span class="badge badge-danger"><i class="fa fa-times"></i></span>
                @endif
            </li>
            @endforeach
        </ul>
        @if ($allLoaded)
            <a class="btn btn-green pull-right" href="{{ route('install.permissions') }}">
                Siguiente
                <i class="fa fa-arrow-right"></i>
            </a>
        @else
            <button class="btn btn-green pull-right" disabled>
                Siguiente
                <i class="fa fa-arrow-right"></i>
            </button>
        @endif
        <div class="clearfix"></div>
    </div>
@stop