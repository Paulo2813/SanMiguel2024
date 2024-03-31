@extends('layouts.app')
<link rel="stylesheet" href="css/app.css">

@section('content')
<div class="container">

    <div class="login">
    
        <form action="{{ route('alumnos.crear') }}" method="POST">
            @csrf <!-- Agrega el token CSRF para protección -->
            <h1>Crear</h1>
            <label>Nombre</label>
            <input type="text" name="nombre">
            <br/>
            <label for="seccion">Sección:</label>
            <select name="seccion_id" id="seccion" class="form-control">
                <option value="">Todas las secciones</option>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
                @endforeach
            </select>
            <label for="aula">Aula:</label>
            <select name="aula_id" id="aula" class="form-control">
                <option value="">Todas las aulas</option>
                @foreach($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
                @endforeach
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection
