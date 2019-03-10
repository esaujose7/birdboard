@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-5">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
                <a href="/projects">My projects</a> / {{$project->title}}
            </p>

            <a href="/projects/create" class="button">New Projects</a>
        </div>
    </header>

    <main>

        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-grey text-lg font-normal mb-3">Tasks</h2>
                    {{-- tasks --}}

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form action="{{ $task->path() }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{ $project->path().'/tasks' }}" method="POST">
                            @csrf
                            <input type="text" name="body" placeholder="Add a new task" class="w-full">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-grey text-lg font-normal mb-3">General Notes</h2>
                    {{-- general notes --}}
                    <textarea class="card w-full" style="min-height:150px;">Lorem ipsum</textarea>
                </div>

            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>

    </main>
@endsection
