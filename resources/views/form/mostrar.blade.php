@extends('layouts.app')

@section('content')
{{--  <link rel="stylesheet" href="css/app.css">  --}}

<div class="container">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Alumnos</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                {{--  <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>  --}}
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
            <thead>
            <tr>
            <th style="width: 10px">id</th>
            <th>Nombre</th>
            <th>Evaluacion 1</th>
            <th>Evaluacion 2</th>
            <th>Asistencia</th>
            <th style="width: 50px">Acciones</th>
            </tr>
            </thead>

            {{--  cuerpo de la tabla  --}}
            <tbody>
            <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>
            <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
            </td>
            <td><span class="badge bg-danger">55%</span></td>
            </tr>
            <tr>
        </div>
</div>
@endsection
