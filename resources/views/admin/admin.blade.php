<!DOCTYPE html>
<html lang="fr" class="full-height">
<head>
    <title>Admin | Valentin Laidet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>
	<body class="animated fadeIn">
			<!--Navbar-->
			@auth

		    @include('admin.inc.menu')
		    
		    <main>
	    		<h1 class="text-center vertical-center animated fadeInDown">Bienvenue sur la page d'administration</h1>
	    	</main>
	    @endauth
		<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  		<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
	</body>
</html>