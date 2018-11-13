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
                <li>Contactenos</li>
            </ul>

            <div class="title-div">
                <!-- SEO -->
                <!-- OPTIMIZE YOUR TITLE AND DESCRIPTION -->
                <!-- Titulo en cada pagina -->
                <h1 class="main-title">Contactenos</h1>
            </div>

            <form method="POST" action="{{ route('contactPost') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección Electrónica') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                    <div class="col-md-6">
                        <input id="asunto" type="text" class="form-control" name="asunto" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="detalle" class="col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>

                    <div class="col-md-6">
                        <textarea id="detalle" type="text" class="form-control" name="detalle" required></textarea>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Enviar') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
