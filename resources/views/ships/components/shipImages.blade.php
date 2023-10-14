@if(count($ship->shipImages) > 0)
    <div class="input-container input-container--gallery">
        <div class="label">Галерея</div>
        <div class="gallery">
            @foreach($ship->shipImages as $shipImage)
                <a href="{{$shipImage->url}}" class="gallery__link" data-fancybox="gallery"><img class="gallery__img" src="{{$shipImage->url}}" alt="{{$shipImage->title}}"></a>
            @endforeach
        </div>
    </div>
@endif
