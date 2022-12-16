@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="heroImage"></div>
<section class="comicsList">
    <div class="container">
        <h2>Current Series</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
            @foreach($comics as $comic)
            <div class="col">
                <div class="comic">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="banner">
    <div class="container d-flex justify-content-evenly">
        @foreach(Config::get('db.items') as $item)
        <div class="item">
            <img src="{{ Vite::asset('resources/img/')}}{{ $item['icon']}}" alt="">
            <span>{{ $item['text'] }}</span>
        </div>
        @endforeach
    </div>
</div>
@endsection