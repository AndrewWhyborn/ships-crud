@extends('layouts.main-layout')
@section('title', 'Список лайнеров')

@section('content')
    <h1>Список лайнеров</h1>

    @foreach($ships as $ship)
        <div class="ship">
            <span class="ship__title">[{{$ship->id}}] {{$ship->title}}</span>
            <a href="{{route("ships.edit", ["ship" => $ship])}}">Редактировать</a>
        </div>
    @endforeach
@endsection
