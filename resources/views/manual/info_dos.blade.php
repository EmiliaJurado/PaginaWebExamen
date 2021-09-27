@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')


<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center">Vistas en laravel 8</p>
            </h1>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/41.png')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center">¿Que son las vistas?</p>
                    </h1><br>
                    <h5>
                        <p class="text-white text-justify">Laravel nos permite separar las vistas de presentación al usuario final de
                            la lógica de la aplicación, las vistas pueden contener código HTML, CSS y PHP.</p>
                    </h5>
                    <br><br>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">1.Ubicación de las vistas</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Primero vamos a ver en que apartado se alojan las vistas de nuestra página.
                                    Lo cual es en la carpeta “resources/views/welcome.blade.php”.</p>
                            </h6>
                            <img src="{{asset('img/43.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">2.Craer vistas</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Empezamos a crear una vista, nos iremos a resources/view, clic derecho, nuevo archivo.
                                    Le colocaremos el nombre de nuestra vista EJEMPLO: principal.blade.php
                                </p>
                            </h6>
                            <img src="{{asset('img/44.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">3. Crear una vista dentro de una carpeta</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Empezamos a trabajar en las vistas, lo primero que haremos es crear la carpeta, Ejemplo:Manual
                                    en la ruta resources/views.</p>
                            </h6>
                            <img src="{{asset('img/47.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">4.Vista creada</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Dentro del apartado “welcome.blade.php” se encuentra la vista principal de nuestra página.</p>
                            </h6>
                            <img src="{{asset('img/50.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                </div><br><br><br>
            </div>
        </div>
    </div>
</div>
</div>
@endsection