@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="card">
            <h2 class="card-title">{{ $artist->stage_name }}</h2>
            <div class="card-body">
                <h4 class="card-title">{{ $artist->name }}</h4>
                <h4 class="card-title">{{ $artist->lastname }}</h4>
                <h4 class="card-title">{{ $artist->genre }}</h4>
                <h4 class="card-title">{{ $artist->date_of_birth }}</h4>
                <h4 class="card-title">{{ $artist->record_label }}</h4>
            </div>
        </div>

    </div>
@endsection
