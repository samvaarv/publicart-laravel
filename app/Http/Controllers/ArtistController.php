<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('artists.index' ,['artists' => Artist::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        $artist = Artist::create($request->validated(),[
            'artistImage' => $request->artistImage, 
            'artist' => $request->artist, 
        ]);
        Session::flash('success', 'Artist added successfully');
        return redirect() -> route('artists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit',compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        $artist -> update([
            'artistImage' => $request->artistImage, 
            'artist' => $request->artist, 
        ]);
        Session::flash('success', 'Artist updated successfully');
        return redirect() -> route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist -> forceDelete();
        Session::flash('success', 'Artist deleted successfully');
        return redirect() -> route('artists.index');
    }
}
