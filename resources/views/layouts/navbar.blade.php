<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-sm navbar-light">
                <!-- Navbar content -->
                <a class="navbar-brand" href="/home">
                    <!-- SEO -->
                    <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
                    <img src="{{$company[0]->company_logo}}" width="100" height="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @foreach ($menu as $menuItem)  
                            <li class="nav-item active">
                                <a class="nav-link" href="/{{$menuItem->url}}">{{$menuItem->title}}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>