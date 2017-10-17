<html>
	<head>
	</head>
	<body>
		<form method="POST" action="{{ URL::to('administrador/test/send') }}" enctype="multipart/form-data">
			<input type="file" name="img">
			<input type="submit" value="send">
		</form>
	</body>
</html>