@extends('layouts.app')

@section('content')
<div class="container py-5">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Stage name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Record Label</th>
                <th scope="col">Genre</th>
                <th scope="col">Album</th>
                <th scope="col">Actions</th>
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
                <td>{{$artist['album']}}</td>
                <td>
                    VIEW | EDIT | DELETE
                </td>
            </tr>

            @empty
            <p>No Artists</p>
            @endforelse
        </tbody>
    </table>

</div>
@endsection