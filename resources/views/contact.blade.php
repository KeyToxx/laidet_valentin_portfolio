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
    
    <?php $page = "contact"; ?>
    @include('inc.menu')

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
    </div><!--container-fluid-->

    @include('inc.footer')

  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  </body>
</html>
