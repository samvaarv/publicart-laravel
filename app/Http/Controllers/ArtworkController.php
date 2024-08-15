<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Artist;
use App\Http\Requests\StoreArtworkRequest;
use App\Http\Requests\UpdateArtworkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::with('artist')->get();

        return view('artworks.index',['artworks' => $artworks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.create', [
            'artists'=> Artist::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtworkRequest $request)
    {
        // $artwork = Artwork::create($request->validated());
        // $artwork -> artists() -> attach($request -> artist); 
        $artwork = Artwork::create($request->validated(),[
            'title' => $request->title, 
            'description' => $request->description, 
            'imageURL' => $request->imageURL, 
            'yearInstalled' => $request->yearInstalled, 
            'artist_id' => $request->artist,
            // Add other fields as necessary
        ]);
        Session::flash('success', 'Artwork added successfully');
        return redirect() -> route('artworks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        return view('artworks.show',compact('artwork'));

    }

    public function showPublic($id)
    {
        $artwork = Artwork:: where('id', $id)-> first();
        return view('artworks.show-public',compact('artwork'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit',compact('artwork'),['artists' => Artist::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtworkRequest $request, Artwork $artwork)
    {
        // $artwork->update($request->validated());
        $artwork->update([
            'title' => $request->title,
            'description' => $request->description,
            'imageURL' => $request->imageURL, 
            'yearInstalled' => $request->yearInstalled, 
            'artist_id' => $request->artist_id,
        ]);
        Session::flash('success', 'Artwork Updated successfully');
        return redirect() -> route('artworks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $artwork -> forceDelete();
        Session::flash('success', 'Artwork deleted successfully');
        return redirect() -> route('artworks.index');
    }
}
