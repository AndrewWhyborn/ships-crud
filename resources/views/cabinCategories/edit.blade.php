@extends('layouts.main-layout')
@section('title', 'Редактирование лайнера')

@section('content')
    <h1>Редактирование категории каюты</h1>

    <div class="back">
        <a href="{{route("ships.edit", ["ship" => $cabinCategory->ship])}}">К редактированию лайнера</a>
    </div>

    @if (session()->has('message'))
        <div class="alert alert--success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{route("cabinCategories.update", ["cabinCategory" => $cabinCategory])}}" class="form">
        @method("PUT")
        @csrf

        <div class="input-container">
            <label for="title" class="label">Название</label>
            <input id="title" type="text" name="title" required value="{{$cabinCategory->title}}" class="input">
        </div>

        <div class="input-container">
            <label for="vendor_code" class="label">Код категории</label>
            <select id="vendor_code" name="vendor_code" required class="select">
                @foreach(\App\Constants\CabinCategoryConstants::VENDOR_CODES as $vendor_code)
                    <option @if($vendor_code === $cabinCategory->vendor_code) selected @endif value="{{$vendor_code}}">{{$vendor_code}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-container">
            <label for="type" class="label">Разновидность</label>
            <select id="type" name="type" required class="select">
                @foreach(\App\Constants\CabinCategoryConstants::TYPES as $value => $type)
                    <option @if($type === $cabinCategory->type) selected @endif value="{{$type}}">{{$type}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-container">
            <label for="description" class="label">Описание</label>
            <textarea id="description" name="description" required
                      class="textarea">{!! $cabinCategory->description !!}</textarea>
        </div>

        <div class="input-container">
            <label for="ordering" class="label">Порядок сортировки</label>
            <input id="ordering" type="number" name="ordering" required value="{{$cabinCategory->ordering}}" class="input">
        </div>

        <div class="input-container">
            <label for="state" class="label">Состояние</label>
            <select id="state" name="state" required class="select">
                @foreach(\App\Constants\StateConstants::STATE_OPTIONS as $value => $option)
                    <option @if($value === $cabinCategory->state) selected @endif value="{{$value}}">{{$option}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="button button--submit">Сохранить описание и характеристики</button>
    </form>

    @include("cabinCategories/components/cabinCategoryImages")
@endsection
