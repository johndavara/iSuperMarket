@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <!-- SEO -->
            <!-- BREADCRUMBS -->
            <!-- Uso de "breadcrumbs para un mejor conocimiento de las estructura del sito" -->
            <ul class="breadcrumb">
                <li><a href="home">Inicio</a></li>
                <li><a href="contact">Contactenos</a></li>
                <li>Solicitud enviada</li>
            </ul>

            <h1 class="main-title">Solicitud enviada</h1>

            <div>
                <p>{{ __('Su solicitud ha sido enviada con éxito, se le responderá a la brevedad') }}</p>
                <p>{{ __('Gracias por preferirnos.') }}</p>
            </div>

        </div>
    </div>
</div>
@endsection
