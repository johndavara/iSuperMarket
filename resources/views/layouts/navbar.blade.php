<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-sm bg-primary navbar-light">
                <!-- Navbar content -->
                <a class="navbar-brand" href="#">
                    <img src="{{$company[0]->company_logo}}" width="100" height="100" alt="">
                </a>
                <ul class="navbar-nav">
                    @foreach ($menu as $menuItem)  
                        <li class="nav-item active">
                        <a class="nav-link" href="{{$menuItem->url}}">{{$menuItem->title}}</a>
                        </li>
                    @endforeach 
                </ul>
            </nav>
        </div>
    </div>
</div>