@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('admin.artists.update', $artist->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name', $artist->name)}}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{old('lastname', $artist->lastname)}}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="stage_name" class="form-label">stage_name</label>
            <input type="text" name="stage_name" id="stage_name" class="form-control" value="{{old('stage_name', $artist->stage_name)}}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">date_of_birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{old('date_of_birth', $artist->date_of_birth)}}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="record_label" class="form-label">record_label</label>
            <input type="text" name="record_label" id="record_label" class="form-control" value="{{old('record_label', $artist->record_label)}}" placeholder="" aria-describedby="helpId">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{old('genre', $artist->genre)}}" placeholder="" aria-describedby="helpId">
        </div>


        <button type="submit" class="btn btn-primary">Edit</button>

    </form>
</div>


@endsection