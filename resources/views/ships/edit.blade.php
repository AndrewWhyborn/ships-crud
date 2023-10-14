@extends('layouts.main-layout')
@section('title', 'Редактирование лайнера')

@section('content')
    <h1>Редактирование лайнера</h1>

    <div class="back">
        <a href="{{route("ships.index")}}">К списку лайнеров</a>
    </div>

    @if (session()->has('message'))
        <div class="alert alert--success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{route("ships.update", ["ship" => $ship])}}" class="form">
        @method("PUT")
        @csrf

        <div class="input-container">
            <label for="title" class="label">Название</label>
            <input id="title" type="text" name="title" required value="{{$ship->title}}" class="input">
        </div>

        <div class="input-container">
            <label for="description" class="label">Описание</label>
            <textarea id="description" name="description" required
                      class="textarea">{!! $ship->description !!}</textarea>
        </div>

        @foreach($ship->spec as $index => $spec)
            <div class="input-container">
                <label for="specValue[{{$index}}]" class="label">{{$spec['name']}}</label>
                <input type="hidden" name="specName[{{$index}}]" value="{{$spec['name']}}">
                <input id="specValue[{{$index}}]" type="text" name="specValue[{{$index}}]" required value="{{$spec['value']}}" class="input">
            </div>
        @endforeach

        <div class="input-container">
            <label for="ordering" class="label">Порядок сортировки</label>
            <input id="ordering" type="number" name="ordering" required value="{{$ship->ordering}}" class="input">
        </div>

        <div class="input-container">
            <label for="state" class="label">Состояние</label>
            <select id="state" name="state" required class="select">
                @foreach(\App\Constants\StateConstants::STATE_OPTIONS as $value => $option)
                    <option @if($value === $ship->state) selected @endif value="{{$value}}">{{$option}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="button button--submit">Сохранить описание и характеристики</button>
    </form>

    @include("ships/components/shipImages")
    @include("ships/components/shipCabinCategories")
@endsection
