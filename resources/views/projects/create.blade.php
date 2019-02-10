@extends('layouts.app')

@section('content')

<h3>Crea un proyecto</h3>

<form action="/projects" method="POST" style="display:flex;flex-direction:column">
@csrf
<label for="title">
    Titulo
    <input type="text" name="title" id="title">
</label>

<label for="description">
    Descripcion
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
</label>

<input type="submit" value="Crear">
<a href="/projects">Volver</a>

</form>

@endsection
