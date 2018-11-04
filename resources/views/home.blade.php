@extends('layouts.app')

@section('content')
<div class="container">
<nav class="navbar navbar-expand-sm bg-primary navbar-light">
            <!-- Navbar content -->
                <a class="navbar-brand" href="#">
                    <img src="{{$company[0]->company_logo}}" width="100" height="100" alt="">
                </a>
                <ul class="navbar-nav">
             @foreach ($menu as $menuItem)  
                <li class="nav-item active">
                <a class="nav-link" href="#">{{$menuItem->title}}</a>
                </li>
              @endforeach 
            </ul>
</nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @foreach ($banner as $bannerItem)  
        @if($bannerItem->image_order == 1)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$bannerItem->image_order}}" class="active"></li>
            @else
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$bannerItem->image_order}}"></li>
            @endif
        @endforeach  
        </ol>
        <div class="carousel-inner">
        @foreach ($banner as $bannerItem)  
           @if($bannerItem->image_order == 1)
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{$bannerItem->image_url}}" alt="{{$bannerItem->image_alt}}" title="{{$bannerItem->image_tooltip}}">
            </div>
            @else
            <div class="carousel-item">
            <img class="d-block w-100" src="{{$bannerItem->image_url}}" alt="{{$bannerItem->image_alt}}" title="{{$bannerItem->image_tooltip}}">
            </div>
            @endif
        @endforeach  

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
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
    
<!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-primary">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

                <a class="navbar-brand" href="#">
                    <img src="{{$company[0]->company_logo}}" width="100" height="100" alt="">
                </a>
      <!-- Content -->
      <p class="isupermarket-brand">{{$company[0]->company_name}}</p>
      <p>{{$company[0]->company_address}}</p>
      <p>{{$company[0]->company_telephone}}</p>
      <p>{{$company[0]->company_email}}</p>

    </div>


    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

        <!-- Links -->

        <div class="text-white">
        @foreach ($menu as $menuItem)  
            <a href="#!" class="float-left pl-4 text-dark">{{$menuItem->title}}</a>
        @endforeach
       </div>

      </div>


  </div>

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 bg-dark text-white">© 2018 Copyright:
  <p> Grupo 2 Desarrollo Aplicaciones Web</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</div>
@endsection
