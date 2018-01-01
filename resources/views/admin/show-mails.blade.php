<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/show-mails.css')}}">
</head>
	<body class="animated fadeIn">
		<!--Navbar-->
		@auth
		
	    @include('admin.inc.menu')

		<div class="container-fluid">
			
			<div class="row content">
				
				<div class="col-md-12 heading">
					
					<span id="sujet">{{$mails->sujet}}</span>
					<hr>
					<span id="name"><i class="fa fa-user"></i>{{$mails->name}}</span>
					<span id="mail">{{$mails->mail}}</span>	

				</div>

				<div class="col-md-12 body">
					
					<span id="message">{{$mails->message}}</span>

				</div>

			</div>

				
		</div>

	    @endauth
		<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  		<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
	</body>
</html>