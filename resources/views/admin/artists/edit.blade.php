@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('admin.artists.update', $artist->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" @error('name') is-invalid @enderror
                    value="{{ old('name', $artist->name) }}" placeholder="" aria-describedby="helpId">
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        <strong>Name, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label" @error('lastname') is-invalid @enderror>lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control"
                    value="{{ old('lastname', $artist->lastname) }}" placeholder="" aria-describedby="helpId">
                @error('lastname')
                    <div class="alert alert-danger" role="alert">
                        <strong>Lastname, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stage_name" class="form-label" @error('stage_name') is-invalid @enderror>stage_name</label>
                <input type="text" name="stage_name" id="stage_name" class="form-control"
                    value="{{ old('stage_name', $artist->stage_name) }}" placeholder="" aria-describedby="helpId">
                @error('stage_name')
                    <div class="alert alert-danger" role="alert">
                        <strong>Stage_name, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label"
                    @error('date_of_birth') is-invalid @enderror>date_of_birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                    value="{{ old('date_of_birth', $artist->date_of_birth) }}" placeholder="" aria-describedby="helpId">
                @error('date_of_birth')
                    <div class="alert alert-danger" role="alert">
                        <strong>Date_of_birth, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="record_label" class="form-label"
                    @error('record_label') is-invalid @enderror>record_label</label>
                <input type="text" name="record_label" id="record_label" class="form-control"
                    value="{{ old('record_label', $artist->record_label) }}" placeholder="" aria-describedby="helpId">
                @error('record_label')
                    <div class="alert alert-danger" role="alert">
                        <strong>Record_label, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label" @error('genre') is-invalid @enderror>genre</label>
                <input type="text" name="genre" id="genre" class="form-control"
                    value="{{ old('genre', $artist->genre) }}" placeholder="" aria-describedby="helpId">
                @error('genre')
                    <div class="alert alert-danger" role="alert">
                        <strong>Genre, Error:</strong> {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Edit</button>

        </form>
    </div>
@endsection
