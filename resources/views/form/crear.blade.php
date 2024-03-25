@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login">
        <form>
            @csrf <!-- Agrega el token CSRF para protección -->
            <h1>INICIO</h1>
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Sección</label>
            <select name="seccion">
                <option value="1">1</option>
                <option value="2">2</option>
                <!-- Agrega más opciones según necesites -->
            </select>
            <label>Letra de Sección</label>
            <input type="text" name="letra_seccion">
            <!-- Puedes agregar más campos de evaluación si es necesario -->

            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection
