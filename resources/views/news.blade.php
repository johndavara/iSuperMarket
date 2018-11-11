@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="/home">Inicio</a></li>
                <li>Novedades</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="title-div">
                <h1 class="main-title">{{$menu[2]->title}}</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @include("newsCards")
    </div>
</div>
@endsection
