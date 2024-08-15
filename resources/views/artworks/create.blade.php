@extends('layouts.admin')
<x-app-layout>
    <section>
        <div class="section-header">
            <div class="container h-100 align-items-center d-flex">
                <h2 class="section-header-title text-white text-uppercase">Add New Art</h2>
            </div>
        </div>
    </section>
    <section class="section-body">  
        <div class="container">                   
            <form method="POST" action="{{ route('artworks.store')}}" class="row">
                @if ($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>  
                @endif

                @csrf
                <div class="form-group col-12 col-md-6 mb-3">
                    <label class="form-label" for="title">Title:</label>
                    <input class="form-control" type="text" id="title" name="title" required>
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6 mb-3">
                    <label class="form-label" for="artist">Artist Name:</label>
                    <select class="form-select" id="artist" name="artist">
                    @foreach ( $artists as $artist )
                        <option value="{{$artist->id}}">{{$artist->artist}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group col-12 col-md-12 mb-3">
                    <label class="form-label" for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                </div>
                <div class="form-group col-12 col-md-8 mb-3">
                    <label class="form-label" for="imageURL">Image URL:</label>
                    <input class="form-control" type="text" id="imageURL" name="imageURL">
                </div>
                <div class="form-group col-12 col-md-4 mb-3">
                    <label class="form-label" for="yearInstalled">Year Installed:</label>
                    <select class="form-select" id="yearInstalled" name="yearInstalled" data-component="date">
                    <?php
                        for ($year = date('Y'); $year >= 1900; $year--) { // Reverse loop, change ++ to --
                        echo '<option value="'.$year.'">' . $year . '</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group col-12 mt-4">
                    <button class="btn btn-primary" type="submit">
                        <svg height="45.6" width="125.738"><rect height="45.6" width="125.738"></rect></svg>
                        <span class="btn-text">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>