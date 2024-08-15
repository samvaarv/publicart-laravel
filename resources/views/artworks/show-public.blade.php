@extends('layouts.admin')
@section('content')
    <section class="container">
        <article class="art-article">
            <div class="art-header">
                @if($artwork->artist)
                    <span class="text-center">{{ $artwork->artist->artist}}</span>
                @endif
                <h1 class="text-center text-uppercase">{{ $artwork -> title }}</h1>
            </div>
            <div class="art-image-block">
                <img src="{{$artwork->imageURL}}" alt="{{ $artwork -> title }}" class="w-100 h-100">
            </div>
            <div class="row main-content">
                <div class="col-12 col-md-7 col-xl-8 pe-md-5">
                    <h2 class="sub-heading mb-3">Description</h2>
                    <div class="text-desc">{{ $artwork -> description }}</div>
                </div>
                <aside class="col-12 col-md-5 col-xl-4">
                    <div class="art-widget">
                        <h4 class="art-widget-title">Year Installed</h4>
                        <p class="art-widget-text">{{ $artwork -> yearInstalled }}</p>
                    </div>
                </aside>
            </div>
        </article>
    </section>
@endsection