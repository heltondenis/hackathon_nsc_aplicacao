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
        
        .btn-action-voto {
            text-align: right;
            font-size: 25px;
            margin: 5px;
        }

        button.btn.btn-primary {
            border-radius: 15px;
            font-size: 25px;
        }
        
        .card.mb-3 {
            -webkit-box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.75);
            box-shadow: 7px 10px 24px -16px rgba(0, 0, 0, 0.45);
        }

        .button-submit {
            position: fixed !important;
            right: 15px;
            bottom: 10px;
            color: #00995D;
            font-size: 65px;
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
                            <strong>NS.Code</strong>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </header>
            <main role="main">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1></h1>
                        <p class="lead text-muted"></p>
                    </div>
                </section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($questions as $key)

                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">João Augusto</h5>
                                    <p class="card-text"> {{ $key['message'] }}</p>
                                    <hr>
                                    <p class="card-text"><small class="text-muted">
                            <div class="btn-action-voto" >
                                <a href="">
                                <i class="fas fa-thumbs-down" style="color:black"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-thumbs-up" style="color:#00995D"></i>
                                </a>
                            </div>
                            </small>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="button-submit">
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"> <i class="fas fa-paper-plane" style="color:white"></i></button>
                        </div>
                        
                    </div>
                </div>
            </main>
            <footer class="text-muted">
                <div class="container">
                </div>
            </footer>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
    </div>
    </body>

</html>

<script>

    </script>