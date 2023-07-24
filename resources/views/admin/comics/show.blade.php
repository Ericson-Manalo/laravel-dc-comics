@extends('layouts.app')

@section('title', 'Single comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-white mt-5">
                Comic: {{ $comic['title'] }}
            </h1>
        </div>
    </div>
    <div class="row pokemons justify-content-around text-center p-4">
        <article class="card col-12 p-0 m-3">

            <img src="{{ $comic['thumb'] }}" class="card-img-top w-25 p-3 m-auto" alt="{{ $comic['title'] }}">
            <div class="card-body">
                <h3 class="card-title">
                    {{ $comic['title'] }}
                </h3>
                <h6>
                    ID # : {{ $comic['id'] }}
                </h6>
                <p class="card-text p-4">
                    {{$comic['description']}}
                </p>
            </div>
        </article>
    </div>
</div>

@endsection