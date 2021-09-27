@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')


<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center">Vistas con blade en laravel 8</p>
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
                    <h5>
                        <p class="text-white text-justify">Laravel cuenta con plantillas Blade para introducir código PHP en nuestro código HTML
                            de una manera sencilla y segura, puedes crear y separar vistas en trozos de código que luego puedes aprovechar en distintas vistas de la aplicación.</p>
                    </h5>
                    <br><br>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">1.Crear carpeta y archivo para la plantilla</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Empezamos a trabajar en las vistas, lo primero que haremos es crear la carpeta “layout” y dentro de ella el archivo plantilla
                                    que será la plantilla que tendrán nuestras vistas en la ruta resources/views/layout/plantilla.blade.php.
                                </p>
                            </h6>
                            <img src="{{asset('img/52.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">2.Crear la plantilla</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify"> Aqui podras colocar la codificacion quieres que se vea
                                    en tus demas vista, desde un navbar hasta el pie de pagina, siempre y cuando el código correspondiente a “layou.blade.php” con las directivas @ yiel y @ section.</p>
                            </h6>
                            <img src="{{asset('img/54.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">3.Directivas para cada vista</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">@ extends('layout.plantilla')
                                    @ section('titulo', 'Hola')
                                    @ section('contenido')
                                    @ endsection</p>
                            </h6>
                            <img src="{{asset('img/55.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection