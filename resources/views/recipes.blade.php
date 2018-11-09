@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="generalTitle">
                {{$menu[1]->title}}
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @include("recipesCards")
    </div>
</div>
@endsection
