@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row mt-3">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('projects.tasks.index', $project) }}" class="btn btn-secondary">Tasks</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
