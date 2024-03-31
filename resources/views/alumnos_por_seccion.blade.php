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
                <form action="{{ route('alumnos.importar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <input type="file" name="documento">
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" id="exportar" type="submit">Importar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <form action="{{ route('alumnos.exportar') }}" enctype="multipart/form-data">
                    <button class="btn btn-success" id="exportar" type="submit">Exportar</button>
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
                            <a href="{{ route('alumnos.editar', ['id' => $alumno->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('alumnos.eliminar', $alumno->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este alumno?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
