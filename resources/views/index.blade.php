<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Details</title>
	<style>
		span{color: red};
	</style>
</head>
<body>
	<form method="post" action="store">
		@csrf
	<h1>Enter Details</h1>
	Name:<input type="text" name="name" value="{{old('name')}}"><br>
	<span>@error('name'){{$message}}@enderror</span><br>
	Email:<input type="text" name="email" value="{{old('email')}}"><br>
	<span>@error('email'){{$message}}@enderror</span><br>
	Phone:<input type="number" name="phone" value="{{old('phone')}}"><br>
	<span>@error('phone'){{$message}}@enderror</span>
	<input type="submit" name="" value="save">
</form>
<a href="list">view list</a>


</body>
</html>