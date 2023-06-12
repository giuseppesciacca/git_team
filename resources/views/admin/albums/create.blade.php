@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('admin.albums.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                    placeholder="" aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="nr_tracks" class="form-label">Number of Tracks</label>
                <input type="number" name="nr_tracks" id="nr_tracks" class="form-control" value="{{ old('name') }}"
                    placeholder="" aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Artists</label>
                <select class="form-select form-select-lg" name="" id="">
                    <option value="">Select an Artist</option>
                    @foreach ($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
