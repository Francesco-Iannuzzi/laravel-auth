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
                    <th>Cover</th>
                    <th>Made By</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Code Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($projects as $project)
                    <tr class="table-light">
                        <td scope="row">{{ $project->id }}</td>
                        <td><img height="100" src="{{ $project->cover }}" alt="{{ $project->title }}"></td>
                        <td>{{ $project->made_by }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->link }}</td>
                        <td>{{ $project->code_link }}</td>
                        <td>
                            <div class="d-flex gap-3 px-2">
                                <a href="{{ route('admin.projects.show', $project) }}" class="text-dark">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.projects.edit', $project->slug) }}" class="text-dark">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="" class="text-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
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
