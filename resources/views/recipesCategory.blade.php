@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <!-- SEO -->
            <!-- BREADCRUMBS -->
            <!-- Uso de "breadcrumbs para un mejor conocimiento de las estructura del sito" -->
            <ul class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li><a href="/recipes">Recetas</a></li>
                <li>{{$category->title}}</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="title-div">
                <!-- SEO -->
                <!-- OPTIMIZE YOUR TITLE AND DESCRIPTION -->
                <!-- Titulo en cada pagina -->
                <h1 class="main-title">{{$category->title}}</h1>
            </div>
        </div>
    </div>
    @foreach ($recipes as $recipeItem)  
        <div class="row justify-content-center recipeCategory">
            <div class="col-md-3">
                <a href="/recipes/{{$category->id}}/{{$recipeItem->id}}">
                    <!-- SEO -->
                    <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
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
