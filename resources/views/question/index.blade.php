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
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                              <p class="card-text">
                                 <small class="text-muted">
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
                        <button type="button" id="modal" data-toggle="modal" data-target="#myModal" class="btn btn-primary"> <i class="fas fa-paper-plane" style="color:white"></i></button>
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
      <form method="POST" action="/submit">
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Faça uma pergunta!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        
        @csrf
        <div class="input-group input-group-default mb-3">
            <input type="text" name="name" class="form-control" placeholder="Digite seu nome..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <div class="input-group input-group-default mb-3">
            <input type="email" name="email" class="form-control" placeholder="Digite seu email..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            <br><br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Pergunta</span>
            </div>
            <textarea class="form-control" name="message" aria-label="With textarea"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
      <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </div>
      </div>
      </div>
    </form>
      </div>
   </body>
</html>
<script>
   // $(document).ready(function(){       
   //     $('.modal').on('click', function(){
   //         valor = $(this).attr('data-id');
   //         //alert(valor);
   //         $.ajax({
   //             url:"/teste/"+valor,
   //             success:function(data){
   //                   //alert(data.nome);
   //                   $('#myModal .modal-content').html(data.nome);
   
   //               },
   //               error:function(msg){
   //                   console.log(msg);
   //               }
   //         });
   //     });
   // });
</script>