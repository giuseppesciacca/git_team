@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('admin.albums.update', $album) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $album->name) }}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="nr_tracks" class="form-label">Number of Tracks</label>
            <input type="number" name="nr_tracks" id="nr_tracks" class="form-control" value="{{ old('name', $album->nr_tracks) }}" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">EDIT</button>

    </form>
</div>
@endsection