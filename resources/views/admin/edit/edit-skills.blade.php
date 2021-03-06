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
	    <link rel="stylesheet" type="text/css" href="{{asset('css/edit-skills.css')}}">
	</head>
	<body class="animated fadeIn">
		@auth

			@include('admin.inc.menu')

			<div class="container">

				<div class="row vertical-center text-center">

					<div class="col-md-10">

						<h1>Editez la compétence</h1>
						
						{!! Form::model($adminskills,array('route'=>['admin-skills.update',$adminskills->id],'method'=>'PUT')) !!}
				
							{!! Form::token() !!}
							{!! Form::text('name',null,['id'=>'name']) !!}
							{!! Form::text('level',null,['id'=>'level']) !!}
							{!! Form::text('image',null,['id'=>'image']) !!}
							{!! Form::submit('Editez',['class'=>'btn btn-primary']) !!}

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