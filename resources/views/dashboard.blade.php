<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .fa-pause-circle {
            font-size: 50px;
            margin-top: 6px;
        }
        
        .card.mb-3 {
            -webkit-box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.75);
            box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.45);
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrar</a> @endif @endauth
        </div>
        @endif

        <body>
            <header>
                <div class="collapse bg-dark" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-white">Teste</h4>
                                <p class="text-muted"></p>
                            </div>
                            <div class="col-sm-4 offset-md-1 py-4">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-white">Teste</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-dark bg-dark shadow-sm">
                    <div class="container d-flex justify-content-between">
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <strong>NS.Code - Administrador</strong>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </header>
            <main role="main">
                <section class="jumbotron text-center">

                    <p class="lead text-muted"></p>
    </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        XXXXXX.
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        XXXXXX.
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        XXXXXX.
                    </div>
                </div>
            </div>
            <div class="col-sm pause-circle">
                <i class="fas fa-pause-circle" style="color:#fffff"></i>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                    <ul class="list-group">
                        <li class="list-group-item active">Interações</li>
                        <li class="list-group-item ">Noticia joao</li>
                        <li class="list-group-item ">Noticia Carlos</li>
                        <li class="list-group-item ">Noticia Sei la</li>
                    </ul>
                </div>
            <div class="col-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235203.81500692177!2d-43.58841988251077!3d-22.9111720903467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio+de+Janeiro%2C+RJ!5e0!3m2!1spt-BR!2sbr!4v1476880758681" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    

    </main>
    <footer class="text-muted">
        <div class="container">
        </div>
    </footer>
    </div>
    </div>
    </body>

</html>