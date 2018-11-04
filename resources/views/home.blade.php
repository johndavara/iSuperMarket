@extends('layouts.app')

@section('content')
<div class="container">
<nav class="navbar navbar-expand-sm bg-primary navbar-light">
            <!-- Navbar content -->
                <a class="navbar-brand" href="#">
                    <img src="/images/logo/logo.png" width="100" height="100" alt="">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
