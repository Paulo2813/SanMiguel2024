@extends('layouts.app')
<link rel="stylesheet" href="/css/app.css">

@section('content')
<div class="container">
    <div class="login">
        <form action="{{ route('alumnos.actualizar', $alumno->id) }}" method="POST">
            @csrf 
            @method('PUT') 
            <h1>Editar Alumno</h1>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $alumno->nombre }}">
            <br/>
            <label for="seccion">Sección:</label>
            <select name="seccion_id" id="seccion" class="form-control">
                    <option value="">Todas las secciones</option>
                    @foreach($secciones as $seccion)
                        <option value="{{ $seccion->id }}" {{ $alumno->id_seccion == $seccion->id ? 'selected' : '' }}>{{ $seccion->seccion }}</option>
                    @endforeach
            </select>
            <label for="aula">Aula:</label>
            <select name="aula_id" id="aula" class="form-control">
                    <option value="">Todas las aulas</option>
                    @foreach($aulas as $aula)
                        <option value="{{ $aula->id }}" {{ $alumno->id_aula == $aula->id ? 'selected' : '' }}>{{ $aula->aula }}</option>
                    @endforeach
            </select>
            <label for="evaluacion1">Evaluación 1:</label>
            <input type="number" name="evaluacion1" id="evaluacion1" class="form-control" value="{{ $alumno->evaluacion1 }}">
            <label for="evaluacion2">Evaluación 2:</label>
            <input type="number" name="evaluacion2" id="evaluacion2" class="form-control" value="{{ $alumno->evaluacion2 }}">
           <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection
