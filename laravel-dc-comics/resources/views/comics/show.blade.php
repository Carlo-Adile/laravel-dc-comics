@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row py-4">
            <div class="col-2 py-4">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic['title'] }} </h2>
                <p>{{ $comic['description'] }} </p>
                <hr>
                <div class="metadata">
                    <strong>Series:</strong> {{ $comic->series }} <br>
                    <strong>Type:</strong> {{ $comic->type }} <br>
                    <strong>Price:</strong> {{ $comic->price }} <br>
                </div>
            </div>
        </div>
    </div>
@endsection
