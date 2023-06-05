@extends('layouts.admin')

@section('content')
    @include('partials.validation_errors')

    <form action="{{ route('admin.projects.store') }}" method="post" class="pt-3">
        @csrf

        <h1>Add new Project</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                placeholder="Add title" aria-describedby="helpTitle" value="{{ old('title') }}">
            <small id="helpTitle" class="text-muted">Insert Title here</small>
        </div>

        @error('title')
            <div class="alert alert-danger" role="alert">
                <strong>Error:</strong> {{ $message }}
            </div>
        @enderror
        {{-- form title --}}

        <div class="mb-3">
            <label for="made_by" class="form-label">Name</label>
            <input type="text" name="made_by" id="made_by" class="form-control @error('made_by') is-invalid @enderror"
                placeholder="Add Author" aria-describedby="helpMadeBy" value="{{ old('made_by') }}">
            <small id="helpMadeBy" class="text-muted">Insert Author here</small>
        </div>

        @error('made_by')
            <div class="alert alert-danger" role="alert">
                <strong>Error:</strong> {{ $message }}
            </div>
        @enderror
        {{-- form made_by --}}

        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                rows="3">{{ old('description') }}</textarea>
            <small id="helpDescrition" class="text-muted">Insert a Description here</small>
        </div>

        @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Error:</strong> {{ $message }}
            </div>
        @enderror
        {{-- form description --}}

        <div class="mb-3">
            <label for="creation_date" class="form-label">Sales Date</label>
            <input type="date" name="creation_date" id="creation_date"
                class="form-control @error('creation_date') is-invalid @enderror" placeholder="Add date Project"
                aria-describedby="helpCreationDate" value="{{ old('creation_date') }}">
            <small id="helpCreationDate" class="text-muted">Insert Creation Date here</small>
        </div>

        @error('creation_date')
            <div class="alert alert-danger" role="alert">
                <strong>Error:</strong> {{ $message }}
            </div>
        @enderror
        {{-- form creation_date --}}

        <button type="submit" class="btn btn-primary w-100 mt-4 py-2 px-4">Add</button>


    </form>
@endsection
