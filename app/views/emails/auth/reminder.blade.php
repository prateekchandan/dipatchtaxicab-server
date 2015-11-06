<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			To reset your password, <a href="{{ URL::to('password/reset', array($token)) }}">complete this form</a> .
		</div>

		<br>
		<div>
			Alternatively , you can copy paste this link too on your browser address bar<br>
			{{ URL::to('password/reset', array($token)) }}
		</div>
	</body>
</html>
