@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Alumnos</h3>
            <div class="card-tools">
                <form action="{{ route('alumnos.filtrar') }}" method="GET" class="form-inline">
                    <div class="form-group mr-2">
                        <label for="seccion">Sección:</label>
                        <select name="seccion_id" id="seccion" class="form-control">
                            <option value="">Todas las secciones</option>
                            @foreach($secciones as $seccion)
                            <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-2">
                        <label for="aula">Aula:</label>
                        <select name="aula_id" id="aula" class="form-control">
                            <option value="">Todas las aulas</option>
                            @foreach($aulas as $aula)
                            <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Buscar por nombre">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nombre</th>
                        <th>Sección</th>
                        <th>Aula</th>
                        <th>Evaluación 1</th>
                        <th>Evaluación 2</th>
                        <th>Asistencia</th>
                        <th style="width: 50px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->seccion->seccion }}</td>
                        <td>{{ $alumno->aula->aula }}</td>
                        <td>{{ $alumno->evaluacion1 }}</td>
                        <td>{{ $alumno->evaluacion2 }}</td>
                        <td>{{-- Aquí puedes mostrar la asistencia del alumno --}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Editar</a>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
