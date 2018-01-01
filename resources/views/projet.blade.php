<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Mes projets | Valentin Laidet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/projet.css')}}">
  </head>
  <body class="animated fadeIn">
    
    <?php $page = "projet"; ?>
    @include('inc.menu')
    
    <div class="container-fluid">
  
      
      <div class="row content-portfolio">

        @foreach($galeries as $image)
          <div class="col-md-6 image text-center">

            <div class="view overlay mask waves-effect">
              <a target="_blank" href="{{$image->lien}}">
                <img src="{{$image->image}}" class="img-fluid " alt="image {{$image->name}}">
              </a>
<!--                 <div class="mask flex-center waves-effect waves-light">
                    <p class="white-text">Graphomax</p>
                </div> -->
            </div>

          </div>
        @endforeach

      </div>
      
    </div>

    @include('inc.footer')





  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/projet.js')}}"></script>
  </body>
</html>
