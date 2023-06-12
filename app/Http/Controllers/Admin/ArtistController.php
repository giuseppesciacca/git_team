<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Http\Controllers\Controller;
use App\Models\Album;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $albums = Album::all();

        $artists = Artist::all();

        return view('admin.artists.index', compact('artists', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtistRequest $request)
    {
        //dd($request->all());
        $data = [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'stage_name' => $request->stage_name,
            'date_of_birth' => $request->date_of_birth,
            'record_label' => $request->record_label,
            'genre' => $request->genre,
            'album' => $request->album
        ];


        Artist::create($data);

        return to_route('admin.artists.index')->with('message', 'artist added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {

        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtistRequest  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        $data = [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'stage_name' => $request->stage_name,
            'date_of_birth' => $request->date_of_birth,
            'record_label' => $request->record_label,
            'genre' => $request->genre,
            'album' => $request->album
        ];


        $artist->update($data);

        return to_route('admin.artists.index')->with('message', 'artist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return to_route('admin.artists.index')->with('message', 'artist deleted successfully');
    }
}