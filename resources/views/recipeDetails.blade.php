@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- SEO -->
            <!-- IDENTIFY AND RECTIFY BROKEN LINKS -->
            <!-- KEEP CLICK PATHS SHORT -->
            <!-- Usar maximo 4 niveles de estructuracion -->
            <ul class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li><a href="/recipes">Recetas</a></li>
                <li><a href="/recipes/{{$category->id}}">{{$category->title}}</a></li>
                <li>{{$recipe->title}}</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <!-- SEO -->
            <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
            <img class="card-img-top" src="{{$recipe->image_url}}" alt="{{$recipe->image_alt}}" title="{{$recipe->image_title}}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center">
                <!-- SEO -->
                <!-- OPTIMIZE YOUR TITLE AND DESCRIPTION -->
                <!-- Titulo en cada pagina -->
                <h1>{{$recipe->title}}</h1>
            </div>
            <pre>{{$recipe->description}}</pre> 
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="/recipes/{{$category->id}}" class="btn btn-primary">Volver a {{$category->title}}</a>
        </div>
    </div>
    @include("comments");
</div>
@endsection
