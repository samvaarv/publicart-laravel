
<x-app-layout>
    <section>
        <div class="section-header">
            <div class="container h-100 align-items-center d-flex">
                <h2 class="section-header-title text-white text-uppercase">Artists</h2>
            </div>
        </div>
    </section>
    <section class="section-body">
        <div class="container">
            <div>
                <a href="{{ route('artists.create')}}" class="btn btn-warning mb-4">
                    <svg height="45.6" width="125.738"><rect height="45.6" width="125.738"></rect></svg>
                    <span class="btn-text">Add Artist</span>
                </a>
            </div>
            <div class="row">
                @foreach ($artists as $artist )
                    <div class="card-art col-12 col-md-6 col-xl-4">
                        <a href="" class="card-art-image d-block">
                                <img src="{{$artist->artistImage}}" class="w-100 h-100" alt="{{ $artist->artist}}" />
                        </a>
                        <div class="card-art-body">
                            <div class="card-art-info">
                                <h3 class="card-art-title">{{ $artist->artist}}</h3>
                            </div>
                        </div>
                        <div class="card-art-footer">
                            <a href="{{ route('artists.edit', $artist -> id )}}" class="btn btn-warning mb-3">
                                <svg height="45.6" width="125.738"><rect height="45.6" width="125.738"></rect></svg>
                                <span class="btn-text">Update</span>
                            </a>
                            <form action="{{ route('artists.destroy', $artist -> id )}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger" type="submit">
                                    <svg height="45.6" width="125.738"><rect height="45.6" width="125.738"></rect></svg>
                                    <span class="-text">Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>                        
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>