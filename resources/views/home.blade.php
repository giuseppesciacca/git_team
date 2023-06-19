@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1>HOME</h1>

    <a name="" id="" class="btn btn-primary" href="{{route('admin.artists.index')}} " role="button">ARTISTS</a>
    <a name="" id="" class="btn btn-primary" href="{{route('admin.albums.index')}} " role="button">ALBUMS</a>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Stage name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Record Label</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($artists as $artist)
            <tr>
                <td scope="row">{{$artist['name']}}</td>
                <td>{{$artist['lastname']}}</td>
                <td>{{$artist['stage_name']}}</td>
                <td>{{$artist['date_of_birth']}}</td>
                <td>{{$artist['record_label']}}</td>
                <td>{{$artist['genre']}}</td>
            </tr>

            @empty
            <p>No Artists</p>
            @endforelse
        </tbody>
    </table>

</div>

@endsection