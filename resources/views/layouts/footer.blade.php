<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Footer -->
            <footer class="page-footer font-small blue pt-4 bg-primary">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                            <a class="navbar-brand" href="/home">
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
                                    <a href={{$menuItem->url}} class="float-left pl-4 text-dark">{{$menuItem->title}}</a>
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
    </div>
</div>