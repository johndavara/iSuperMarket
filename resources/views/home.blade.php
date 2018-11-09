@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Carousel -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('carousel')
        </div>
    </div>

    <!-- Recipes -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="generalTitle">
                <a href="/recipes">{{$menu[1]->title}}</a>
            </div>
        </div>
        @include("recipesCards")
    </div>

    <!-- News -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="generalTitle">
                <a href="/news">{{$menu[2]->title}}</a>
            </div>
        </div>
        @include("newsCards")
    </div>

    <!-- Tips -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="generalTitle">
                <a href="/tips">{{$menu[3]->title}}</a>
            </div>
        </div>
        @include("tipsCards")
    </div>
</div>
@endsection
