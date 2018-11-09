<div class="col-md-12">
    <div class="card-group">
        @foreach ($tips as $tipsItem)  
            <div class="card">
                <img class="card-img-top" src="{{$tipsItem->image_url}}" alt="{{$tipsItem->image_alt}}" title="{{$tipsItem->image_title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$tipsItem->title}}</h5>
                </div>
            </div>
        @endforeach  
    </div>
</div>