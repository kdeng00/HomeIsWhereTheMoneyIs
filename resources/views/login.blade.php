
<html>
	<head>
	<title>HomeIsWhereTheMoneyIs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	</head>
	<body style="background-color:#eee">
		<div class="jumbotron text-center">
			<h1>Login Page</h1>
			<a href="/"><h1>Home</h1></a>

			{{ Form::open(array('action' => 'HomeController@loginUser')) }}
			<p>
				{{ Form::label("username") }}
				{{ Form::text("username") }}
			</p>	
			<p>
				{{ Form::label("password") }}
				{{ Form::password("password") }}
			</p>
			<p>
				{{ Form::submit("Login maxipad resident") }}
			</p>
			{{ Form::close() }}
			<h1>{{ $message }}</h1>
		</div>		 
	</body>
</html>
