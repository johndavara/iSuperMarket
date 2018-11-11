<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($banner as $bannerItem)  
            @if($bannerItem->image_order == 1)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$bannerItem->image_order}}" class="active"></li>
            @else
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$bannerItem->image_order}}"></li>
            @endif
        @endforeach  
    </ol>
    <div class="carousel-inner">
        @foreach ($banner as $bannerItem)  
            @if($bannerItem->image_order == 1)
                <div class="carousel-item active">
                    <!-- SEO -->
                    <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
                    <img class="d-block w-100" src="{{$bannerItem->image_url}}" alt="{{$bannerItem->image_alt}}" title="{{$bannerItem->image_tooltip}}">
                </div>
            @else
                <div class="carousel-item">
                    <!-- SEO -->
                    <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
                    <img class="d-block w-100" src="{{$bannerItem->image_url}}" alt="{{$bannerItem->image_alt}}" title="{{$bannerItem->image_tooltip}}">
                </div>
            @endif
        @endforeach  
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>