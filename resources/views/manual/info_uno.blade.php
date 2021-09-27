@extends('layout.plantilla')
@section('titulo', 'Examen')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h1>
                <p class="text-monospace text-white text-center">¿Cómo puedo empezar a usar laravel?</p>
            </h1>
            <ul class="list-group">
                <li class="list-group-item list-group-item-danger">Tenemos que tener nuestro paquete de herramientas listo como puede ser:</li>
                <li class="list-group-item list-group-item-primary">°XAMPP,WAMP,LAM,Laragon,Vagrant</li>
                <li class="list-group-item list-group-item-primary">°Git</li>
                <li class="list-group-item list-group-item-primary">°Intalar Composer</li>
                <li class="list-group-item list-group-item-primary">°Correr comando: composer create-project laravel/laravel "nombre de proyecto"</li>
                <li class="list-group-item list-group-item-primary">°PHP artisan serve</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col">
            <p>
            <h3 class="text-white text-center">1. Instalar Xampp</h3>
            </p>
            <p class="text-white text-justify">Nota: Recuerda revisar la versión de cada uno de los programas
                que incluyen. Te recomendamos como versiones mínimas: PHP 7.3 o superior, Apache 2.0, MySQL 5.6 o superior (si prefieres MariaDB, usa la versión 10.3 como mínimo).
                En mi caso vamos a instalar Xampp:</p>
            <img src="{{asset('img/40.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">1.Instalar Composer</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Composer es una herramienta para gestionar las dependencias en PHP.
                    Te permite declarar las librerías de las cuales tu proyecto depende o necesita y las instala en el proyecto por ti.
                    Para instalar Composer en Windows debemos descargarlo de su página oficial y en la sección Windows Installer, haz click
                    en Composer-Setup.exe.</p>
            </h6>
            <img src="{{asset('img/3.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> 2. Ejecuta</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Una vez que la descarga finalice, ejecuta el instalador y haz click en Next.</p>
            </h6>
            <img src="{{asset('img/5.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">3. Administra</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Si quieres administrar tus proyectos mediante el Explorador de Windows puedes
                    seleccionar la opción «Install Shell Menus» aunque lo recomendable es la usar la línea de comandos.</p>
            </h6>
            <img src="{{asset('img/6.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">4. Ruta</h3>
            </p>
            <h6>
                <p class="text-white text-justify">A continuación nos pide que indiquemos la ruta del ejecutable de PHP,
                    en mi caso como estoy trabajando con XAMPP el ejecutable de PHP se encuentra en la ruta C:\xampp\php\
                    (si usas WAMPP la ruta es C:\wamp\bin\php\php5.5.12) y seleccionas php.exe, luego click en Next.</p>
                <h6>
                    <img src="{{asset('img/7.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">5. Instalación</h3>
            </p>
            <h6>
                <p class="text-white text-justify">En este punto el instalador de Composer nos muestra la configuración de la instalación,
                    simplemente le damos click a Install.</p>
            </h6>
            <img src="{{asset('img/8.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> 6. Finalizar</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Una vez esté todo instalado, aparecerán otras donde simplemente debes hacer click en Next,
                    y posteriormente en Finalizar; después de tantos Next, Next típicos de Windows el instalador de Composer habrá puesto en
                    nuestro PATH global la ruta de la carpeta PHP y su propia carpeta Composer. Esto nos permite trabajar desde consola escribiendo
                    sólo php o composer sin necesidad de indicar la ruta del ejecutable. Para ver que todo está en orden vamos a realizar dos pequeñas
                    pruebas, así que es momento de abrir la consola, y teclear: php -v (tecla Enter)composer -version (tecla Enter)</p>
            </h6>

            <img src="{{asset('img/9.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <br><br><br>
    <h1>
        <p class="text-monospace text-white text-center font-italic">Con esto ya tenemos Composer instalado y funcionando en Windows,
            ahora solo nos queda instalar Laravel, veamos cómo hacer esto posible.</p>
    </h1> <br> <br>



    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">1. Creando proyecto en Laravel</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Existen dos formas de crear un proyecto con Laravel, la primera es descargando
                    el archivo master desde su repositorio oficial de GitHub y la otra es usando Composer desde la consola que es precisamente
                    lo que haremos en esta ocasión. Siempre debes de tener encendido tu servidor web.</p>
            </h6>
            <h6>
                <p class="text-white text-justify">Desde la consola, dirígete al directorio donde guardas tus proyectos web (si usas XAMPP la ruta
                    es C:\xampp\htdocs para WAMPP es C:\wamp\www),y teclea lo siguiente:</p>
            </h6>
            <h6>
                <p class="text-white text-justify text-center">cd C:\xampp\htdocs</p>
            </h6>
            <h6>
                <p class="text-white text-justify">Ahora crearemos el proyecto laravel escribiendo las siguientes palabras mágicas:
                    composer create-project laravel/laravel nombre_del_proyecto --prefer-dist
                    En mi caso en un arranque de creatividad llamaré a mi proyecto “pruebita”</p>
            </h6>
            <img src="{{asset('img/20.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> 2. Descargar librerías por medio de descarga en cmd.</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Composer empezará a descargar las librerías necesarias para nuestro proyecto,
                    esto requiere un poco de tiempo.</p>
            </h6>
            <img src="{{asset('img/21.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">3. Creación de proyecto.</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Si no ocurrió algún problema de conexión a Internet veremos que nuestro proyecto
                    “pruebita” se creó correctamente.</p>
            </h6>
            <img src="{{asset('img/23.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">4. Ejecutar Laravel</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Para ejecutar nuestra carpeta en Laravel tenemos que activarla,
                    nos vamos a nuestra ruta de nuestra carpeta donde se encuentra el proyecto con el comando: cd .\nombre de la carpeta\
                    y enseguida el comando: php artisan serve.
                </p>
            </h6>
            <img src="{{asset('img/26.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">5. Home Laravel</h3>
            </p>
            <h6>
                <p class="text-white text-justify">Finalmente para verificar que la creación de nuestro proyecto “pruebita”
                    se realizó de manera correcta, accede a la IP que te estan otorgando http://127.0.0.1:8000 en el navegador de tu
                    preferencia, donde debes ver lo siguiente:</p>
            </h6>
            <img src="{{asset('img/22.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div><br><br>
    <h1>
        <p class="text-monospace text-white text-center font-italic">¡Felicidades!</p>
    </h1>
    <h1>
        <p class="text-monospace text-white text-center font-italic">Ahora puedes dar rienda suelta a tu imaginación
            y crear aplicaciones geniales con Laravel.</p>
    </h1> <br><br>

    <h1>
        <p class="text-monospace text-white text-center font-italic"><mark>Posibles errores que pueden suceder.</mark></p>
    </h1> <br><br>


    <div class="row mt-4">
        <div class="col-sm-6">
            <h6>
                <p class="text-white text-justify">Si utilizas WAMPP es posible que al ejecutar el instalador de Composer
                    ocurra lo siguiente:</p>
            </h6>
            <img src="{{asset('img/24.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center"> WAMPP SERVER</h3>
            </p>
            <img src="{{asset('img/25.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <br><br>
    <h3>
        <p class="text-monospace text-white text-center ">Tranquilo, este error lo solucionas así:</p>
    </h3>
    <br><br>

    <h5>
        <p class="text-monospace text-white text-justify ">1:Ve a C:\wamp\bin\php\php5.5.12 y edita el archivo php.ini,
            ahora descomenta la línea extension=php_openssl.dll (quita el ; que aparece al inicio).</p>
    </h5><br>
    <h5>
        <p class="text-monospace text-white text-justify">2:Dirígete a C:\wamp\bin\apache\Apache2.4.9\bin y edita el archivo
            php.ini y de nuevo descomenta la línea extension=php_openssl.dll</p>
    </h5>
    <h5>
        <p class="text-monospace text-white text-justify ">3:Reinicia tu servidor y ejecuta de nuevo el instalador de Composer.</p>
    </h5>
    <br><br>
    <h3>
        <p class="text-monospace text-white text-center "> Por lo general en XAMPP este error no llega a ocurrir, ya que la línea
            extension=php_openssl.dll viene descomentada por default.</p>
    </h3>
</div>

@endsection