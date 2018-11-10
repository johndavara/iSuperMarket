@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="home">Inicio</a></li>
                <li><a href="/tips">Tips</a></li>
                <li>{{$tip->title}}</li>
            </ul>
        </div>
    </div>
    <div class="title-div">
        <h1 class="main-title"> {{$tip->title}}</h1>
    </div>

    <img class="card-img-top tips-img" src="../{{$tip->image_url}}" alt="{{$tip->image_alt}}"
         title="{{$tip->image_title}}">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <p style="text-align: justify">
                {{$tip->description}}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <a href="/tips" class="btn btn-primary">Volver a Tips</a>
        </div>
    </div>
</div>
@endsection
