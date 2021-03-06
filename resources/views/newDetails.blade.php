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
                <li><a href="/news">Novedades</a></li>
                <li>{{$newDetails->title}}</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- SEO -->
            <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
            <img class="card-img-top" src="{{$newDetails->image_url}}" alt="{{$newDetails->image_alt}}" title="{{$newDetails->image_title}}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 newDetails">
            <div class="newTitle">
                <!-- SEO -->
                <!-- OPTIMIZE YOUR TITLE AND DESCRIPTION -->
                <!-- Titulo en cada pagina -->
                <h1>{{$newDetails->title}}</h1>
            </div>
            <div class="newDescription">
                <pre>{{$newDetails->description}}</pre>
            </div>
            <div class="back">
                <a href="/news" class="btn btn-primary">Volver a Novedades</a>
            </div>
        </div>
    </div>
</div>
@endsection
