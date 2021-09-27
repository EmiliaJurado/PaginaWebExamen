@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')


<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center"> Rutas en laravel 8</p>
            </h1>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/56.jpg')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <h5>
                        <p class="text-white text-justify">Todas las rutas de Laravel se definen en los archivos que se encuentran en la carpeta routes.
                            El framework carga estos archivos de forma automática. El archivo routes/web.php define las rutas para la interfaz web. A estas rutas
                            se les asigna el grupo de middleware web, el cual proporciona algunas características como el estado de la sesión y la protección CSRF.
                        </p>
                    </h5>
                    <br><br>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">1.Ubicación de rutas</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Para la mayoría de aplicaciones, se comenzará definiendo las rutas en el
                                    archivo routes/web.php. Se puede acceder a las rutas definidas en routes/web.php simplemente escribiendo la URI definida en el navegador.
                                </p>
                            </h6>
                            <img src="{{asset('img/57.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">2.Enrutamiento</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify"> Abrimos el archivo web.php que se encuentra en el directorio routes/. Importamos el controlador InicioController.</p>
                            </h6>
                            <img src="{{asset('img/58.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">3. Enrutamiento con parametros</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Creamos la ruta get para mostrar el listado de las vitas, recibe dos parámetros,
                                    el primero hace referencia a la url del navegador,el segundo hace referencia a la clase InicioController al método que le corresponda.</p>
                            </h6>
                            <img src="{{asset('img/58.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center">Métodos de enrutamiento disponibles</p>
                    </h1>
                    <h5>
                        <p class="text-white text-justify">El router permite registrar rutas que respondan a cualquier verbo HTTP:</p>
                    </h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"> Route::get($uri, $callback);</li>
                        <li class="list-group-item list-group-item-primary"> Route::post($uri, $callback);</li>
                        <li class="list-group-item list-group-item-primary"> Route::put($uri, $callback);</li>
                        <li class="list-group-item list-group-item-primary"> Route::patch($uri, $callback);c</li>
                        <li class="list-group-item list-group-item-primary"> Route::delete($uri, $callback);</li>
                        <li class="list-group-item list-group-item-primary"> Route::options($uri, $callback);</li>
                    </ul> <br><br>

                    <h1>
                        <p class="text-monospace text-white text-center">Rutas con parámetros "Parámetros requeridos"</p>
                    </h1>
                    <h5>
                        <p class="text-white text-justify">A veces necesitarás capturar segmentos de la URI dentro de tu ruta. Por ejemplo,
                            puede que necesites capturar el ID de un usuario de la URL. Puede hacerlo definiendo los parámetros de la ruta:</p>
                    </h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"> Route::get('user/{id}', function ($id) {return 'User '.$id;});</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection