<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
	<div class="row valign-wrapper center-align" style="height:100vh;">
		<div class="col s12 ">
			<img src="{{ asset('images/gif-thanks.gif') }}" class="responsive-img">
			<h3><a href="{{ URL::to('/') }}">{{ Lang::get('lang.back_to_home') }}</a></h3>
		</div>
	</div>
</body>
</html>