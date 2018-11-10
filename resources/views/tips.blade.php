@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="home">Inicio</a></li>
                    <li>Tips</li>
                </ul>

                <div class="title-div">
                    <h1 class="main-title">Tips</h1>
                </div>

                <div class="row justify-content-center">
                    @include("tipsCards")
                </div>

            </div>
        </div>
    </div>
@endsection
