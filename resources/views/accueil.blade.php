<!DOCTYPE html>
<html lang="fr" class="full-height">
  <head>
    <title>Accueil | Valentin Laidet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/accueil.css')}}">
  </head>
  <body class="animated fadeIn">
    
    <header>
      <?php $page = "accueil"; ?>
      @include('inc.menu')
              <!-- Intro Section -->
          <div class="view hm-black-light parallax">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h1 class="h1-reponsive white-text font-up font-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>Bienvenue</strong></h1>
                                <hr class="hr-light mt-4 animated wow fadeInDown" data-wow-delay="0.4s">
                                <!-- <h5 class="font-up mb-5 white-text animated wow fadeInDown" data-wow-delay="0.4s"><strong>Présentation</strong></h5> -->
    <!--                             <a class="btn btn-outline-white animated wow fadeInDown" data-wow-delay="0.4s">Mes projets</a> 
                                <a class="btn btn-outline-white animated wow fadeInDown" data-wow-delay="0.4s">A propos</a>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--                 <video width="100%">
          <source src="videos/bg.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video> --}}

    </header>
    <!--Main Navigation-->

    <div class="container-fluid">

          <div class="row titre-about">
            <div class="offset-md-3 offset-lg-3 offset-xl-3 col-md-6 col-lg-6 col-xl-6">
              <h1>A propos</h1>
            </div>
            <!-- <i class="fa fa-address-card-o" aria-hidden="true"></i> -->

          </div>

          <div class="row about">

              <div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                @foreach ($about as $text)

                  <?php

                  $textepresentation = $text->text;

                  $replace = str_replace("prénom", $text->firstname, $textepresentation);

                  $replace = str_replace("nom", $text->lastname, $replace);

                  echo "<p>".$replace."</p>";

                  ?>

                @endforeach
                
                {!! Form::open(['route'=>'cv_download','method'=>'GET','class'=>'text-center']) !!}
                  
                  {!! Form::token() !!}
                  {!! Form::button('Télécharger mon CV',['class'=>"btn btn-outline-primary rounded waves-effect z-depth-5",'type'=>'submit']) !!}

                {!! Form::close() !!}

              </div>

          </div>

          <div class="row titre-skills">
            <div class="col-md-12 col-lg-12 col-xl-12">
              <h1 class="text-center">Mes compétences</h1>
            </div>
          </div>

          <div class="row skills">
            
              @foreach ($skills as $skill)

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 justify-content-center text-center  mt-1 mb-5">
                    
                    <div class="skill-card">

                        <header class="skill-card__header skill-card__{{$skill->name}}"><img class="skill-card__icon" src="{{$skill->image}}" alt="Logo {{$skill->name}}"/></header>

                        <section class="skill-card__body">

                            <h2 class="skill-card__title">{{$skill->name}}</h2>

                            <div class="mt-4">

                                <img src="img/checked.png" alt="checked" width="20%">

                            </div>

                        </section>

                    </div>

                </div>

              @endforeach

          </div>

      </div><!--Container-fluid-->


      <footer>

        <div class="row">
          <div class="col-md-3 text-center">
            <span>Contact : <a href="mailto:valentinlaidet1@gmail.com">valentinlaidet1@gmail.com</a></span>
          </div>
          <div class="offset-md-6 col-md-3 text-center">
            Partage du site via les réseaux sociaux
          </div>
        </div>
        
      </footer>
                
  
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/accueil.js')}}"></script>
  </body>
</html>
