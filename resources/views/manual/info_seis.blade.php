@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')


<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center"> ¿Para qué sirven los Collections en Laravel?</p>
            </h1>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/60.png')}}" alt="First slide" height="500rem">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <h5>
                        <p class="text-white text-justify">En PHP una de las estructuras de datos más usadas son los arreglos, sin embargo,
                            una pequeña debilidad dentro de PHP es que los arreglos no son objetos, y tenemos que usar funciones auxiliares para manipularlos,
                            además de eso algunas veces estas funciones son inconsistentes en el orden de los parámetros o en la forma de usarse.</p>
                    </h5>
                    <br><br>
                    <h5>
                        <p class="text-white text-justify">Cuando trabajamos en Laravel este problema se soluciona con las Collections, este tipo de objeto
                            especial de objeto viene a crear una especie de capa superior dentro de nuestros arreglos tradicionales. Considera que existe un modelo
                            llamado User en tu proyecto de Laravel, cuando nosotros usamos el código: “User::all();“ lo que realmente nos está regresando no es un array,
                            es más bien un objeto Collection.,lo más interesante de esto es que a pesar de ser un objeto, aún puedes seguir accediendo a cada elemento usando
                            el índice correspondiente, por ejemplo:</p>
                    </h5>
                    <br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$users=Users::all(); // Esto regresa un Collection</li>
                        <li class="list-group-item  list-group-item-secondary">$firstUser = $users[0];</li>
                        <li class="list-group-item  list-group-item-secondary">></li>
                    </ul><br><br>
                    <h5>
                        <p class="text-white text-justify">Otra forma de crear una Collection es usando el método collect sobre un array regular:</p>
                    </h5><br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$users=collect([$user1, $user2]);>
                        </li>
                    </ul><br><br>
                    <h5>
                        <p class="text-white text-justify">Pero eso no es todo, además de poder usar este objeto como un arreglo, también cuenta con otros métodos
                            especiales para acceder a elementos de una forma más natural:</p>
                    </h5><br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$firstUser=$users->first();
                        </li>
                        <li class="list-group-item  list-group-item-secondary">$lastUser = $users->last();</li>
                        <li class="list-group-item  list-group-item-secondary">></li>
                    </ul><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center"> Buscar elementos</p>
                    </h1>
                    <h5>
                        <p class="text-white text-justify">Otro punto en el que las Collections brillan es la forma en la que podemos buscar elementos,
                            para esto Collection cuenta con diversos métodos que podemos utilizar, por ejemplo:</p>
                    </h5><br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$users=$users->where(‘name’, ‘Jhon Doe’);>
                        </li>
                    </ul><br><br>
                    <h5>
                        <p class="text-white text-justify">En este ejemplo la colección buscará todos los elemento que tengan la propiedad name con el
                            valor ‘Jhon Doe’, pero eso no es todo, como esto regresa otra colección puedes encadenar los métodos:</p>
                    </h5><br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$users=$users->where(‘name’, ‘Jhon Doe’)->first();>
                        </li>
                    </ul><br><br>

                    <h1>
                        <p class="text-monospace text-white text-center"> Recorrer los elementos</p>
                    </h1>
                    <h5>
                        <p class="text-white text-justify">También existen métodos especiales que nos permitirán recorrer los elementos y usar un closure sobre ellos, por ejemplo:</p>
                    </h5><br><br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$filtered=$users->filter(function($user) {
                        </li>
                        <li class="list-group-item  list-group-item-secondary">return $user->age > 18;</li>
                        <li class="list-group-item  list-group-item-secondary">}); // Regresa a los users con edad mayor a 18</li>
                        <li class="list-group-item  list-group-item-secondary">$mapped = $users->map(function($user) {</li>
                        <li class="list-group-item  list-group-item-secondary">return $user->email;</li>
                        <li class="list-group-item  list-group-item-secondary">}); // regresa un nuevo arreglo solo con los emails de los usuarios</li>
                        <li class="list-group-item  list-group-item-secondary">$pluckValues $users->pluck(‘email’); // regresa un nuevo arreglo solo con los emails de los usuarios</li>
                        <li class="list-group-item  list-group-item-secondary">></li>
                    </ul><br><br>
                    <h1>
                        <p class="text-monospace text-white text-center"> Obtener partes del arreglo</p>
                    </h1>
                    <h5>
                        <p class="text-white text-justify">También es muy sencillo obtener sub grupos del arreglo, por ejemplo:</p>
                    </h5><br><br>


                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <$users->take(2); // regresa los primeros 2 elementos
                        </li>
                        <li class="list-group-item  list-group-item-secondary">$users->chunk(3); // regresa un arreglo de colecciones y cada una tendrá máximo 3 elementos</li>
                        <li class="list-group-item  list-group-item-secondary">></li>
                    </ul><br><br>

                    <h1>
                        <p class="text-monospace text-white text-center"> Matemáticas</p>
                    </h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  list-group-item-secondary">
                            <collect([2, 3, 4, 5])->avg(); // nos regresa el valor promedio
                        </li>
                        <li class="list-group-item  list-group-item-secondary">$users->sum(‘age’); // Nos regresa la suma de todas las edades de los usuarios</li>
                        <li class="list-group-item  list-group-item-secondary">></li>
                    </ul><br><br>





                    <h5>
                        <p class="text-white text-justify">Además de todo esto, las colecciones también nos ofrecen algunos métodos que nos permiten
                            hacer operaciones aritméticas dentro de nuestro código, por ejemplo:</p>
                    </h5>
                    <h5>
                        <p class="text-white text-justify">Recuerda que esto solo es una parte de lo que te pueden ofrecer las colecciones usando Laravel,
                            no olvides consultar la documentación y seguir aprendiendo acerca de lo que ofrecen.</p>
                    </h5><br>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection