@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Albums</h1> <a name="" id="" class="btn btn-primary" href="{{ route('admin.albums.create') }}" role="button">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Number track</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($albums as $album)
            <tr>
                <td scope="row">{{ $album['name'] }}</td>
                <td>{{ $album['nr_tracks'] }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('admin.albums.edit', $album->id) }}">
                        EDIT
                    </a>


                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $album->id }}">
                        DELETE
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modal-{{ $album->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Delete Album</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Delete this album?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    <form action="{{ route('admin.albums.destroy', $album->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(document.getElementById('modal-{{ $album->id }}'), options)
                    </script>
                </td>
            </tr>

            @empty
            <p>No Artists</p>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('admin.albums.create') }}" class="btn btn-dark">Add Album</a>

</div>
@endsection