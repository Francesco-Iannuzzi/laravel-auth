@extends('layouts.admin')

@section('content')
    <div class="table-responsive pt-3">
        <div class="d-flex justify-content-between">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-dark align-self-center">
                <i class="fa-solid fa-plus px-3"></i>New Project
            </a>
        </div>
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Made By</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($projects as $project)
                    <tr class="table-light">
                        <td scope="row">{{ $project->id }}</td>
                        <td>{{ $project->made_by }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}">View</a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr class="table-primary">
                        <td scope="row">There is no project yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
