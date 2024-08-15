@extends('layouts.admin')
@section('content')
<section>
            <div class="section-header">
                <div class="container h-100 align-items-center d-flex">
                    <h2 class="section-header-title text-white text-uppercase">Artworks</h2>
                </div>
            </div>
        </section>
        <section class="section-body">
            <div class="container">
                <div class="row" data-masonry='{"percentPosition": true }'>
                    @foreach ($artworks as $artwork )
                        <div class="card-art col-12 col-md-6 col-xl-4">
                            <a href="" class="card-art-image d-block">
                                 <img src="{{$artwork->imageURL}}" class="w-100 h-100" alt="{{ $artwork->title}}" />
                            </a>
                            <div class="card-art-body">
                                <div class="card-art-info">
                                @if($artwork->artist)
                                    <p class="card-art-artist">{{ $artwork->artist->artist}}</p>
                                @endif
                                    <h3 class="card-art-title">{{ $artwork->title}}</h3>
                                </div>
                            </div>
                            <div class="card-art-footer">
                                <a href="{{ route('artworks.show-public', $artwork -> id )}}" class="card-footer-link"><span class="alt-text">View more</span></a>
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </section>
@endsection