@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center">¿Qué necesito saber para usar un framework de backend (Laravel)?</p>
            </h1>
            <MARQUEE WIDTH=100% HEIGHT=70 ALIGN=BOTTOM class=" text-light">"Laravel es un marco de aplicación web con una sintaxis elegante y
                expresiva. Ya hemos sentado las bases, permitiéndole crear sin preocuparse por las pequeñas cosas."</MARQUEE>


            <div class="row mt-4">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/Laravel.png')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/dos.jpg')}}" alt="Second slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{asset('img/uno.jpeg')}}" alt="Third slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                    </h5>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{asset('img/tres.png')}}" alt="Fourth slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{asset('img/cuatro.png')}}" alt="Fifth slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{asset('img/cinco.png')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <br><br>

            <ul class="list-group">
                <li class="list-group-item active text-center">Para utilizar un Framework</li>
                <li class="list-group-item list-group-item-success">1:Conocimientos solidos en la programacion(adbstracción)</li>
                <li class="list-group-item list-group-item-success">2:Conocimientos solidos en programación estructurada y orientada a objetos</li>
                <li class="list-group-item list-group-item-success">3:MySQL o MariaADB</li>
                <li class="list-group-item list-group-item-success">4:Conocimientos avanzados e PHP,POO, MySQL y PDO</li>
                <li class="list-group-item list-group-item-success">5:Conociminetos en HTML5</li>
                <li class="list-group-item list-group-item-success">6:Git y GitHub</li>
                <li class="list-group-item list-group-item-success">7:Composer</li>
                <li class="list-group-item list-group-item-success">Administración de servidore Apache</li>

            </ul> <br> <br> <br>

            <h1>
                <p class="text-monospace text-white text-center">¿Qué es un framework?</p>
            </h1>

        </div>

        <h5>
            <p class="text-white">Un framework es un entorno de trabajo que tiene como objetivo facilitar la labor de
                programación, ofreciendo una serie de características y funciones que aceleran el proceso,
                reducen los errores, favorecen el trabajo colaborativo y sonsiguen obtener un produscto de mayor calidad.
            </p>
        </h5>
        <br>

        <div class="row mt-4">
            <div class="col">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <img src="{{asset('img/diez.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('img/once.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="530xp">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12"><br> <br>
                <h1>
                    <p class="text-monospace text-white text-center">¿Qué debes tener en cuenta al elegir los framework?</p>
                </h1>
                <br>
                <em>
                    <h4>
                        <p class="text-left font-weight-bold text-white">Tipo de proyecto:</p>
                    </h4>
                </em>

                <p class="text-white text-justify">Debe de tenerse en cuenta el tipo de proyecto a desarrollar para elegir el mejor framework y así obtener
                    los mayores beneficios. Si se trta de un proyecto web donde se van a desarrollar multiples cruds que insertaran a bases de datos y
                    estos a su vez tendran credenciales de usuarios diferentes,
                    seria interesante optar por laravel, codeigniter, yii,sed por ejemplo.
                </p>
                <br>
                <em>
                    <h4>
                        <p class="text-left font-weight-bold text-white">Librería,plugins y extenciones:</p>
                    </h4>
                </em>

                <h5>
                    <p class="text-white text-justify"> Los frameworks suelen incluir distintos complementarios que facilitan la programación y desarrollo.
                        Antes de elegir un gramework es necesario cerciorarse que oncluye las librerías, plugins o extenciones necesarias, pues de lo contrario
                        podría suponer un esfuerzo y pérdida de tiempo tener que implementarlas.
                    </p>
                </h5>
                <br>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <img src="{{asset('img/doce.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                    </div>
                    <div class="col-sm-6">
                        <img src="{{asset('img/trece.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="530xp">
                    </div>
                </div>




            </div>
            <div class="row mt-4">
                <div class="col-sm-12"><br> <br>
                    <h1>
                        <p class="text-monospace text-white text-center">¿Qué es laravel?(Documentación)</p>
                    </h1>
                    <br>
                    <h5>
                        <p class="text-white text-justify">Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Un marco web proporciona una estructura y
                            un punto de partida para crear su aplicación, lo que permite concentrarse en crear algo sorprendente mestras nos preocupamos por los detalles.
                        </p>
                    </h5>
                    <h5>
                        <p class="text-white text-justify">Laravel se esfuerza por proporcionar una experincia de desarrollador increíble al mismo tiempo
                            que proporciona funciones poderosas como una inyección de dependencia completa, una capa de abstracción de base de datos expresiva, colas y trabajos
                            programados, pruebas de integración y unidad, y más.
                        </p>
                    </h5>
                    <h5>
                        <p class="text-white text-justify">Si eres nuevo en PHP o frameworks web o tienes años de experencia, Laravel es un framework que puede crecer contigo.
                            Leayudaremos a dar sus primeros pasos como desarrollador web o le daremos un impulso a medida que lleva su experencia al siguiente final.
                        </p>
                    </h5>
                    <br>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/catorse.jpg')}}" alt="First slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/dos.jpg')}}" alt="Second slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/uno.jpeg')}}" alt="Third slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/tres.png')}}" alt="Fourth slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/cuatro.png')}}" alt="Fifth slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/cinco.png')}}" alt="First slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row mt-4">
                        <div class="col-sm-12"><br> <br>
                            <h1>
                                <p class="text-monospace text-white text-center">¿Por qué utilizar laravel?</p>
                            </h1>
                            <br>
                            <h5>
                                <p class="text-white text-justify">1....Es un framework de uso en alza por loq ue es probabale que en trabajos en equipo se utilice este framework a otros.
                                </p>
                            </h5>
                            <h5>
                                <p class="text-white text-justify">2....Utiliza un sistema ORM muy potente: Eloquent, que permite incorporar facilmente paginacion automatica, relaciones uno-a-uno, uno-a-muchos, polomórficas, validacion,
                                    protección de campos, generación de arrays/json
                                </p>
                            </h5>
                            <h5>
                                <p class="text-white text-justify">3....Motor de plantillas Blade: Increíblemente sofisticado y sencillo. Utiliza varios componentes de frameworks tan reconocidos como Symfony.
                                </p>
                            </h5>
                            <h5>
                                <p class="text-white text-justify">4....Artisan permite realiizar muchas acciones directamente desde la consola y programar acciones propias.
                                </p>
                            </h5>
                            <br>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <img src="{{asset('img/quince.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('img/dieciseis.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="530xp">
                                </div>
                            </div><br><br><br><br>

                            <h1>
                                <p class="text-monospace text-white text-center">¿Laravel es un framework en MVC?</p>
                            </h1>
                            <br>
                            <em>
                                <h4>
                                    <p class="text-left font-weight-bold text-white">¿Qué es MVC?</p>
                                </h4>
                            </em>
                            <h5>
                                <p class="text-white text-justify">Es el modelo vista Controlador o MVC, es un paradigna de programación donde cada uno de los elementos es separado, en un principio mvc fue creado para representar pequeños
                                    componentes es separado, en un princio mcv fue creado para representar pequeños componentes en desktop y no para la web.
                                    <em>
                                        <h4>
                                            <p class="text-left font-weight-bold text-white">Funcionamiento de MVC en web:</p>
                                        </h4>
                                    </em>
                                </p>
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/1.jpg')}}" alt="First slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/dos.jpg')}}" alt="Second slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/uno.jpeg')}}" alt="Third slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/tres.png')}}" alt="Fourth slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/cuatro.png')}}" alt="Fifth slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset('img/cinco.png')}}" alt="First slide" height="500rem">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection