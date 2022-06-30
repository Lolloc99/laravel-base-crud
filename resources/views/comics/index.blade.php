@extends('layouts.app')

@section('main_content')

    <h1>Lista dei fumetti</h1>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <h2> {{$comic->title}} </h2>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <p> {{$comic->description}} </p>
            </li>
        @endforeach
    </ul>

@endsection
