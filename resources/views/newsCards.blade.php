<div class="col-md-12">
    <div class="card-group">
        @foreach ($news as $newsItem)  
            <div class="card">
                <a href="/news/{{$newsItem->id}}">
                <!-- SEO -->
                <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
                <img class="card-img-top" src="{{$newsItem->image_url}}" alt="{{$newsItem->image_alt}}" title="{{$newsItem->image_title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$newsItem->title}}</h5>
                </div>
            </div>
        @endforeach  
    </div>
</div>