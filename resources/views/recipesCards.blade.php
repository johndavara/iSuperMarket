<div class="col-md-12">
    <div class="card-group">
        @foreach ($recipies as $recipeItem)  
            <div class="card">
                <img class="card-img-top" src="{{$recipeItem->image_url}}" alt="{{$recipeItem->image_alt}}" title="{{$recipeItem->image_title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$recipeItem->title}}</h5>
                </div>
            </div>
        @endforeach  
    </div>
</div>