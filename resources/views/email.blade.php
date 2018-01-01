<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Email</title>
	</head>
	<body style="background: #333;height: 100%;padding: 1% 15% 0 15%">
		<h1 style="color: #fff;text-align: center;"><strong>Bonjour !</strong></h1>
		<p>Vous avez reçu un mail de la part de Mr/Mme {{$form->name}} contenant les informations suivantes :</p>
		<ul style="padding: 0;">
			
			<li style="color: #fff;">{{$form->name}}</li>
			<li style="color: #fff;">{{$form->mail}}</li>
			<li style="color: #fff;">{{$form->sujet}}</li>
			<li style="color: #fff;">{{$form->message}}</li>

		</ul>
		<div style="width: 50%;margin: auto;">
			<a target="_blank" href="http://127.0.0.1:8000/show-mails" style="display: block;text-align: center;"><button style="background-color: transparent;border: 1px solid lightblue;border-radius: 20px;color: lightblue;font-size: 1rem;padding: 10px;width: 20%;margin: 0 auto 20px auto;">Voir plus</button></a>
		</div>
	</body>
</html>