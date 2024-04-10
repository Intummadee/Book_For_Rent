@extends('layout')

@section('title', 'Home')


@section('content')
    <h1>Home!!</h1>
    <hr>
    @foreach ($books as $book)
        <h4>{{$book["name"]}}</h3>
        @if ($book["price"] > 100)
            <p class="text text-success">{{$book["price"]}}</p>
        @endif
    @endforeach
@endsection


