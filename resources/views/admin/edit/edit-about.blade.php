<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
	    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/edit-about.css')}}">
	</head>
	<body>
		@auth

			@include('admin.inc.menu')

			<div class="container">

				<div class="row vertical-center text-center">

					<div class="col-md-10 offset-md-1">

						<h1>Editez le texte de présentation</h1>
						
						{!! Form::model($adminabout,array('route'=>['admin-about.update',$adminabout->id],'method'=>'PUT')) !!}
				
							{!! Form::token() !!}
							{!! Form::textarea('text',null,['id'=>'text']) !!}
							{!! Form::text('firstname',null,['id'=>'firstname']) !!}
							{!! Form::text('lastname',null,['id'=>'lastname']) !!}
							{!! Form::text('years',null,['id'=>'years']) !!}
							{!! Form::submit('Envoyez !',['class'=>'btn btn-success']) !!}

						{!! Form::close() !!}

						@foreach($errors->all() as $errors)
							<ul class="alert alert-danger">
								<li>{{$errors}}</li>
							</ul>
						@endforeach

					</div>

				</div>

			</div>
		@endauth

	</body>
</html>