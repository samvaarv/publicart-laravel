<x-app-layout>
    <section>
        <div class="section-header">
            <div class="container h-100 align-items-center d-flex">
                <h2 class="section-header-title text-white text-uppercase">Update Art</h2>
            </div>
        </div>
    </section>
    <section class="section-body">  
        <div class="container">                   
            <form method="POST" action="{{ route('artworks.update', $artwork->id)}}" class="row">
                @if ($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>  
                @endif
                @method('PUT')
                @csrf
                <div class="form-group col-12 col-md-7 mb-3">
                    <label class="form-label" for="title">Title:</label>
                    <input class="form-control" type="text" id="title" name="title" value="{{old('title') ?? $artwork->title}}" required>
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-5 mb-3">
                    <label class="form-label" for="artist">Artist Name:</label>
                    <select class="form-select" id="artist" name="artist">
                    @foreach ( $artists as $artist )
                        @if ($artwork -> artist_id == $artist ->id)
                            <option selected value="{{$artist->id}}">{{$artist->artist}}</option>
                        @else{
                            <option value="{{$artist->id}}">{{$artist->artist}}</option>
                        }
                        @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group col-12 col-md-12 mb-3">
                    <label class="form-label" for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="6">{{old('description') ?? $artwork->description}}</textarea>
                </div>
                <div class="form-group col-12 col-md-8 mb-3">
                    <label class="form-label" for="imageURL">Image URL:</label>
                    <input class="form-control" type="text" id="imageURL" name="imageURL"  value="{{old('imageURL') ?? $artwork->imageURL}}">
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
                        <span class="btn-text">Update</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>