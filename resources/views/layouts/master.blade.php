<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Furbook</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="page-header">
			@yield('header')
		</div>
		@if(Session::has('seccess'))
		<div class="alert alert-success">
			{{Session::get('seccess')}}
		</div>
		@endif
		@yield('content')
	</div>
</body>
</html>