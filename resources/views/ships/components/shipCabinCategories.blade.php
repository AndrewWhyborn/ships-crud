@if(count($ship->cabinCategories) > 0)
    <div class="input-container">
        <div class="label">Категории кают</div>
        <div class="categories">
            @foreach($ship->cabinCategories as $cabinCategory)
                <div class="category">
                    1243
{{--                    <img class="category__img" src="{{$shipImage->url}}" alt="{{$shipImage->title}}">--}}
                </div>
            @endforeach
        </div>
    </div>
@endif
