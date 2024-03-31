@extends('layouts.app')
<link rel="stylesheet" href="/css/main.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Secciones</h2>
                    <div class="cajaMain">
                        @foreach($secciones as $seccion)
                            <a href="{{ route('alumnos.seccion', $seccion->id) }}" class="botonesMain"><h1 class="textMain">{{ $seccion->seccion }}</h1></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
