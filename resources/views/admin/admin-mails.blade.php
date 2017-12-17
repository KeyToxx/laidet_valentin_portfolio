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
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-mails.css')}}">
</head>
	<body class="animated fadeIn">
		<!--Navbar-->
		@auth
		
    	    @include('admin.inc.menu')

    		<div class="container-fluid">

                <a class="exitadmin" href="{{route('accueil')}}"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                Sortir de l'administration</a>

                <div class="row vertical-center text-center">
                    <div class="col-md-10">

                        @if(Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                        
                        {{link_to_route('show-mails','Supprimez un mail',null,['class'=>'btn btn-danger'])}}

                    </div>
                </div>
            </div>


	    @endauth
		<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  		<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
	</body>
</html>