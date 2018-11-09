@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('carousel')
        </div>
    </div>
    <div class="col-md-12">
        <div id="generalTitle">
        {{$menu[1]->title}}
        </div>
    </div>

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

    <div class="col-md-12">
        <div id="generalTitle">
        {{$menu[2]->title}}
        </div>
    </div>

    <div class="col-md-12">

        <div class="card-group">
        @foreach ($news as $newsItem)  
        <div class="card">
            <img class="card-img-top" src="{{$newsItem->image_url}}" alt="{{$newsItem->image_alt}}" title="{{$newsItem->image_title}}">
            <div class="card-body">
            <h5 class="card-title">{{$newsItem->title}}</h5>
            </div>
        </div>
        @endforeach  
       </div>

    </div>

     <div class="col-md-12">
        <div id="generalTitle">
        {{$menu[3]->title}}
        </div>
    </div>

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
</div>
@endsection
