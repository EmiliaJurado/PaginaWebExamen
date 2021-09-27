<!doctype html>
<html lang="en">

<head>
    <title> @yield('titulo')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    </head>

<body class="inicio">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <img src="{{ asset('img/laravel1.svg')}}" class="rounded float-left" alt="" width="90xp" height="90xp">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                        <a href="/manual/info_uno">Instalacion y puesta en marcha de laravel 8</a>
                        </li>
                        <li class="breadcrumb-item">
                        <a href="/manual/info_dos">Vistas en laravel 8</a>
                        </li>
                        <li class="breadcrumb-item">
                        <a href="/manual/info_tres">Vistas con blade en laravel 8</a>
                        </li>
                        <li class="breadcrumb-item">
                        <a href="/manual/info_cuatro">Rutas en laravel 8</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                        <a href="/manual/info_cinco">Controladores en laravel 8</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                        <a href="/manual/info_seis">Collections en Laravel</a>
                        </li>
                    </ol>
                    </nav>
                </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    @yield('contenido')
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid fondo2 mt-4" style="background-color:#566573">
        <div class="row">
            <div class="col-xs-12 col-md-12">
               <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mx-auto">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#FDFEFE">🌐Boletín Informativo🌐</h5>
      <p class="text-justify" style="color:#D0D3D4">Manténgase actualizado con las últimas noticias, tutoriales, paquetes y más de Laravel. Cada semana, 
        seleccionamos la mejor información nueva y la enviamos a su bandeja de entrada todos los domingos por
        la mañana.</p> 
        
        <div class="text-center">
        <img src="{{ asset('img/laravel1.svg')}}" class="rounded float-left" alt="" width="90xp" height="80xp">
        <img src="{{ asset('img/laravel.svg')}}" class="rounded mx-auto d-block" alt="" width="110xp" height="100xp">
        </div>
        

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#FDFEFE">💻Blog💻</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://laravel-news.com/rich-text-for-laravel">◽Rich Text for Laravel</a>
        </li>
        <li>
          <a href="https://laravel-news.com/laravel-8-59-0">◽Laravel 8.59 Released</a>
        </li>
        <li>
          <a href="https://laravel-news.com/aws-mistakes">◽Mistakes I've Made in AWS</a>
        </li>
        <li>
          <a href="https://laravel-news.com/laravel-8-58-0">◽Laravel 8.58 Released</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#FDFEFE">📌Tutorial📌</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://laravel-news.com/using-sqs-fifo-queues">◽Using SQS FIFO Queues</a>
        </li>
        <li>
          <a href="https://laravel-news.com/aws-mistakes">◽Mistakes I've Made in AWS</a>
        </li>
        <li>
          <a href="https://laravel-news.com/typescript-laravel">◽Typescript with Laravel</a>
        </li>
        <li>
          <a href="https://laravel-news.com/customizing-stubs-in-laravel">◽Customizing Stubs in Laravel</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#FDFEFE">👨‍💻Paquetes👨‍💻</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://laravel-news.com/rich-text-for-laravel">◽Rich Text for Laravel</a>
        </li>
        <li>
          <a href="https://laravel-news.com/laravel-console-spinner">◽Laravel Console Spinner</a>
        </li>
        <li>
          <a href="https://laravel-news.com/laravel-job-chainer">◽Laravel Job Chainer</a>
        </li>
        <li>
          <a href="https://laravel-news.com/laravel-mail-export">◽Laravel Mail Export</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1"  style="color:#FDFEFE">Instalación Gratis</h5>
  </li>
  <li class="list-inline-item">
    <a href="https://laravel.com/docs/8.x/installation" class="btn btn-danger btn-rounded">Ir</a>
  </li>
</ul>
<!-- Call to action -->

<hr>

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/LaravelCommunity" role="button">
      <i class="fab fa-facebook-f"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1" href="https://twitter.com/laravelphp?lang=es" role="button">
      <i class="fab fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1" href="https://laravel.com/" role="button">
      <i class="fab fa-google-plus-g"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1" href="https://mx.linkedin.com/company/laravel" role="button">
      <i class="fab fa-linkedin-in"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-dribbble mx-1" href="https://dribbble.com/tags/laravel" role="button">
      <i class="fab fa-dribbble"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="color:#D0D3D4 ">© 2021 Copyright:
  <a href="https://www.arsys.es/blog/programacion/que-es-laravel/"> Laravel8.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
                <!-- Footer -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
