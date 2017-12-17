<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Contact | Valentin Laidet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
  </head>
  <body class="animated fadeIn">

  <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7" style="list-style: none;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active animated slideInUp">
                        <a class="nav-link" href="{{route('accueil')}}">Accueil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item animated fadeInDown">
                      <a class="nav-link" href="{{route('projet')}}">Mes projets</a>
                    </li>

                    <li class="nav-item animated slideInUp">
                      <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                    @auth
                      <li class="nav-item animated fadeInDown">
                        <a class="nav-link" href="{{route('admin')}}">Administration</a>
                      </li> 
                    @endauth     
                </ul>
                <div class="form-inline">
                    @guest
                      <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>CONNEXION</a>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->lastname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                        DECONNEXION
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </div>
            </div>
        </div>
    </nav><!--nav-->

    <div class="container-fluid ">
      <div class="row vertical-center">
              <div class="col-md-4">

                <form id="formulaire" method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h1 id="titre">Contactez-moi</h1>

                    <i class="fa fa-user prefix grey-text"></i>
                    <input placeholder="*Nom" type="text" id="name" name="name" class="form-control">
                    {!! $errors->first('name', '<p class="error">:message</p>') !!}
                    
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input placeholder="*Votre Email" type="email" id="mail" name="mail" class="form-control">
                    {!! $errors->first('mail', '<p class="error">:message</p>') !!}

                    <i class="fa fa-tag prefix grey-text"></i>
                    <input placeholder="*Sujet" type="text" id="sujet" name="sujet" class="form-control">
                    {!! $errors->first('sujet', '<p class="error">:message</p>') !!}


                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea placeholder="*Message" type="text" id="message" name="message" class="md-textarea"></textarea>
                    {!! $errors->first('message', '<p class="error">:message</p>') !!}
                
                    <div class="text-center mt-5">
                        <button class="btn deep-orange lighten-2 z-depth-5" type="submit">Envoyez</button>
                        <hr>
                    </div>

                    <div class="text-center mt-5">
                        
                        <p class="success">
                            @if(Session::has('envoimail'))
                                {{Session()->get('envoimail')}}
                            @endif
                        </p>

                    </div>

                </form>

            </div>
      </div>
    </div>
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  </body>
</html>
