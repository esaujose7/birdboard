@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-5">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">My projects</h2>

            <a href="/projects/create" class="button">New Projects</a>
        </div>
    </header>

    <main class="flex flex-wrap -mx-3">
        @forelse ($projects as $project)
        <div class="w-1/3 px-3 pb-6">
            @include('projects.card')
        </div>
        @empty
            <div>No projects yet</div>
        @endforelse
        </main>
@endsection
