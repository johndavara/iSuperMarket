@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="home">Inicio</a></li>
                <li><a href="/recipes">Recetas</a></li>
                <li>{{$category->title}}</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="generalTitle">
                {{$category->title}}
            </div>
        </div>
    </div>
    @foreach ($recipes as $recipeItem)  
        <div class="row justify-content-center recipeCategory">
            <div class="col-md-3">
                <a href="/recipes/{{$category->id}}/{{$recipeItem->id}}">
                    <img class="card-img-top" src="{{$recipeItem->image_url}}" alt="{{$recipeItem->image_alt}}" title="{{$recipeItem->image_title}}">
                </a>
             </div>
            <div class="col-md-7">
                <a href="/recipes/{{$category->id}}/{{$recipeItem->id}}">
                    <h2>{{$recipeItem->title}}</h2>
                </a>
                <hr>
                <p>{{$recipeItem->meta_description}}</p>
            </div>
        </div>
    @endforeach  
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="/recipes" class="btn btn-primary">Volver a Recetas</a>
        </div>
    </div>
</div>
@endsection
