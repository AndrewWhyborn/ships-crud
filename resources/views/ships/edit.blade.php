@extends('layouts.main-layout')
@section('title', 'Редактирование лайнера')

@section('content')
    <h1>Редактирование лайнера</h1>

    <form method="post" action="{{route("ships.update", ["ship" => 3])}}">
        @method("PUT")
        @csrf

        <div class="input-container">
            <label for="title" class="label">Название</label>
            <input id="title" type="text" name="title" required value="{{$ship->title}}" class="input">
        </div>

        <button type="submit" class="button button--submit">Сохранить</button>
    </form>
@endsection
