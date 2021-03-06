<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- SEO -->
        <!-- Definicion de Meta ViewPort , Descripcion, Keywords, Autor y Titulo -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina inicial de iSuperMarket">
        <meta name="keywords" content="iSuperMarket,supermercado,alimentos">
        <meta name="author" content="iSuperMarket">
        <title>iSuperMarket</title>

        <!-- Fonts -->
        <!-- SEO -->
        <!-- Utilizacion de fonts en lugar de usar elementos de etiquetas HTML para el texto -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- SEO -->
        <!-- Definicion de Estilos CSS -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <!-- SEO -->
                <!-- SHORT URL -->
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <nav class="navbar navbar-dark bg-primary">
            <!-- Navbar content -->
                <a class="navbar-brand" href="#">
                    <!-- SEO -->
                    <!-- USE ALT ATTRIBUTES TO OPTIMIZE IMAGES -->
                    <img src="/images/logo/logo.png" width="100" height="100" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
        </div>
    </body>
</html>
