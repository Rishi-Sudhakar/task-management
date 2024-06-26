@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks for Project: {{ $project->name }}</h1>
    <a href="{{ route('projects.tasks.create', $project) }}" class="btn btn-primary">Create Task</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row mt-3">
        @foreach ($tasks as $task)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text">{{ $task->description }}</p>
                        <p class="card-text">Status: {{ $task->status }}</p>
                        <p class="card-text">Due Date: {{ $task->due_date }}</p>
                        <a href="{{ route('projects.tasks.edit', [$project, $task]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('projects.tasks.destroy', [$project, $task]) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
