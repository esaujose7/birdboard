@extends('layouts.app')

@section('content')
    <h1>Birdboard</h1>
    <a href="/projects/create">Proyecto nuevo</a>
    <ul>
        @forelse ($projects as $project)
        <li>
            <a href="{{$project->path()}}">{{$project->title}}</a>
        </li>
        @empty
            <li>No hay proyectos todavia</li>
        @endforelse
    </ul>
@endsection
