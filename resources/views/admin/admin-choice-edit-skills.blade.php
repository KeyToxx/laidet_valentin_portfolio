<!DOCTYPE html>
<html>
  <head>
    <title>Choisissez votre compétences</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-choice-skills.css')}}">
  </head>
  <body class="animated fadeIn">

          @include('admin.inc.menu')
    
          <div class="row titre-skills">
            <div class="col-md-12 col-lg-12 col-xl-12">
              <h1 class="text-center">Choisissez la compétence à modifier</h1>
            </div>
          </div>

          <div class="row skills">
            
              @foreach ($adminskills as $skill)

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 justify-content-center text-center  mt-1 mb-5">
                    
                    <a href="admin-skills/{{$skill->id}}/edit">

                      <div class="skill-card">

                          <header class="skill-card__header skill-card__{{$skill->name}}"><img class="skill-card__icon" src="{{$skill->image}}" alt="Logo {{$skill->name}}"/></header>

                          <section class="skill-card__body">

                              <h2 class="skill-card__title">{{$skill->name}}</h2>

                              <div class="mt-4">

                                  <img src="img/checked.png" alt="checked" width="20%">

                              </div>

                          </section>

                      </div>

                    </a>

                </div>

              @endforeach

          </div>

  </body>
</html>