@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center"> Controladores en laravel 8</p>
            </h1>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/28.png')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center"> ¿Qué es un controlador?</p>
                    </h1><br>
                    <h5>
                        <p class="text-white text-justify">Los controladores son el componente donde nos permite
                            agrupar de una mejor manera las peticiones http; es el intermediario entre las vistas y los modelos,
                            se encarga de realizar la lógica del negocio y controles necesarios de las solicitudes que llegan.</p>
                    </h5>
                    <br><br>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">1.Aperturar la terminal del Editor de Código</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Para crear un controlador Tenemos que tener activada la carpeta en la que, trabajaremos
                                    y aperturar la terminal de nuestro editor de codigo "Visual Studio".
                                </p>
                            </h6>
                            <img src="{{asset('img/30.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">2.Generar un controlador (Controller)</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Para crear un controlador utilizaremos los comandos de artisan, para
                                    nuestro ejemplo crearemos el controlador “AlumnoController”:</p>
                            </h6>
                            <h6>
                                <p class="text-monospace text-white text-center">php artisan make:controller "nombre del controlador"
                                    EJEMPLO: AlumnoController </p>
                            </h6>
                            <h6>
                                <p class="text-white text-justify">Este creará las funciones básicas que maneja las solicitudes. </p>
                            </h6>
                            <img src="{{asset('img/29.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">3. Ubicación</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">El en directorio app/Http/Controllers se creará el archivo AlumnoController
                                    con extensión .php, esta clase se extiende de la clase base Controller, que proporciona métodos y variables para su mejor funcionamiento.</p>
                            </h6>
                            <img src="{{asset('img/31.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">

                        </div>

                    </div><br><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center"> Inyección de dependencias</p>
                    </h1><br><br>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">1.Inyección de dependencias</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Laravel permite la inyección de dependencias, en el controlador las dependencias
                                    son declaradas e inyectadas dentro de un constructor para ser llamadas desde cualquier método de la clase.</p>
                            </h6>
                            <h6>
                                <p class="text-white text-justify">Dentro de esta clase (en nuestro caso LayoutController) agregamos nuestros métodos públicos (llamados acciones), que después podemos enlazar a una ruta.</p>
                            </h6>
                            <img src="{{asset('img/34.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">2.Primer controlador de Importancia</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">El primer controlador que es el más importante es el de “InicioController” que es el primero que se va a presentar en el navegador para ello vamos a crear dentro de él una función con la directiva __invoke.</p>
                            </h6>
                            <img src="{{asset('img/36.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">3.Enlazar una ruta a un controlador:</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Pasamos como argumento el nombre del controlador y del método que queremos enlazar, separados por un @. En este caso queremos enlazar la ruta
                                    /usuarios al método index del controlador LayoutController:</p>
                            </h6>
                            <img src="{{asset('img/35.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">4.Retornar vistas</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">Ahora vamos a modificar el controlador de vistas(ManualController) creando una
                                    función donde se va a retornar la vista solicitada:</p>
                            </h6>
                            <img src="{{asset('img/37.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <h3 class="text-white text-center">5.Rutas respecto a su controlador</h3>
                            </p>
                            <h6>
                                <p class="text-white text-justify">En el aparatado de las rutas vamos a modificar cada uno de los controladores como en el siguiente ejemplo, pero ahora vamos a darle a la clase la importación.
                                    Y de esa manera ir remplazando todas las tutas con su respectivo controlador. </p>
                            </h6>
                            <img src="{{asset('img/38.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@endsection