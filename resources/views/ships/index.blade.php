@extends('layouts.main-layout')
@section('title', 'Список лайнеров')

@section('content')
    <h1>Список лайнеров</h1>

    @if (session()->has('message'))
        <div class="alert alert--success">
            {{ session('message') }}
        </div>
    @endif

    @foreach($ships as $ship)
        <div class="ship">
            <span class="ship__title">[{{$ship->id}}] {{$ship->title}}</span>
            <a href="{{route("ships.edit", ["ship" => $ship])}}">Редактировать</a>
        </div>
    @endforeach
@endsection
