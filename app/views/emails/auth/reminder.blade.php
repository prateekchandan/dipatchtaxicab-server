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
	</body>
</html>
