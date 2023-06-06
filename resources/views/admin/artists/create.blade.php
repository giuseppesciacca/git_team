@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.artists.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Insert name" value="{{ old('name') }}">

        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="Insert lastname" value="{{ old('lastname') }}">

        <label for="stage_name">Stage_name</label>
        <input type="text" name="stage_name" id="stage_name" placeholder="Insert stage_name"
            value="{{ old('stage_name') }}">

        <label for="stage_name">Record_label</label>
        <input type="text" name="record_label" id="record_label" placeholder="Insert record_label"
            value="{{ old('record_label') }}">

        <label for="stage_name">Genre</label>
        <input type="text" name="genre" id="genre" placeholder="Insert genre" value="{{ old('genre') }}">

        <label for="date_of_birth">Date_of_birth</label>
        <input type="date" name="date_of_birth" id="date_of_birth" placeholder="Insert date_of_birth"
            value="{{ old('date_of_birth') }}">

        <label for="album">Album</label>
        <input type="text" name="album" id="album" placeholder="Insert album" value="{{ old('album') }}">

        <button type="submit">Add</button>


    </form>
@endsection
