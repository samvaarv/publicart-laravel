<x-app-layout>
    <section>
        <div class="section-header">
            <div class="container h-100 align-items-center d-flex">
                <h2 class="section-header-title text-white text-uppercase">Add New Artist</h2>
            </div>
        </div>
    </section>
    <section class="section-body">  
        <div class="container">                   
            <form method="POST" action="{{ route('artists.store')}}" class="row">
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
                <div class="form-group col-12 col-md-4 mb-3">
                    <label class="form-label" for="artist">Artist Name:</label>
                    <input class="form-control" type="text" id="artist" name="artist" required>
                    @error('artist')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-8 mb-3">
                    <label class="form-label" for="artistImage">Artist Image URL:</label>
                    <input class="form-control" type="text" id="artistImage" name="artistImage">
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