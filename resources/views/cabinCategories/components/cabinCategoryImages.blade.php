@if(count($cabinCategory->photos) > 0)
    <div class="input-container input-container--gallery">
        <div class="label">Галерея</div>
        <div class="gallery">
            @foreach($cabinCategory->photos as $photo)
                <a href="{{$photo}}" class="gallery__link" data-fancybox="gallery"><img class="gallery__img" src="{{$photo}}" alt="{{$cabinCategory->title}}"></a>
            @endforeach
        </div>
    </div>
@endif
