<!DOCTYPE html>
<html>
<head>
	<title>Erreur 404</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/404.css')}}">
</head>
<body class="animated fadeIn">
	
	<div class="container-fluid">
		
		<a href="{{route('accueil')}}"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
Retour à la page d'accueil</a>

		<div class="row text-center vertical-center">
			
			<div class="col-md-10">
				
				<h1 class="animated bounceIn">Erreur 404</h1>
				<p>Cette page n'existe pas !</p>

			</div>

		</div>

	</div>

</body>
</html>