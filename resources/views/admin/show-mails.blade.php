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
	<body>
		<!--Navbar-->
		@auth
		
	    @include('admin.inc.menu')

		<div class="container-fluid">
			
			@foreach($mails as $ligne)

				<div class="text-center row ligne">

						<div class="col-md-2 nom">
							<span>{{$ligne->name}}</span>
						</div>

						<div class="col-md-3 mail">
							<span>{{$ligne->mail}}</span>
						</div>

						<div class="col-md-3 sujet">
							<span>{{$ligne->sujet}}</span>
						</div>

						<div class="col-md-3 message">
							<span>{{$ligne->message}}</span>
						</div>

						<div class="col-md-1">
							
							{!! Form::open(array('route'=>['admin-mails.destroy',$ligne->id],'method'=>'DELETE')) !!}
		                        
		                        {!! Form::button('Supprimez',['class'=>'btn btn-danger','type'=>'submit']) !!}

		                    {!! Form::close() !!}

						</div>

				</div>

			@endforeach

		</div>

	    @endauth
		<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  		<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
	</body>
</html>