@if(count($ship->cabinCategories) > 0)
    <div class="input-container input-container--gallery">
        <div class="label">Категории кают</div>
        <div class="categories">
            @foreach($ship->cabinCategories as $cabinCategory)
                <div class="category">
                    <div class="category__header"><div class="category__title">{{$cabinCategory->title}}</div> <a href="{{route("cabinCategories.edit", ["cabinCategory" => $cabinCategory])}}">Редактировать</a></div>

                    <div><strong>Код категории:</strong> {{$cabinCategory->vendor_code}}</div>
                    <div><strong>Разновидность:</strong> {{$cabinCategory->type}}</div>

                    <div>{!! $cabinCategory->description !!}</div>

                    <div class="gallery">
                        @foreach($cabinCategory->photos as $photo)
                            <a href="{{$photo}}" class="gallery__link gallery__link--big" data-fancybox="cabin"><img class="gallery__img" src="{{$photo}}" alt="{{$cabinCategory->title}}"></a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
