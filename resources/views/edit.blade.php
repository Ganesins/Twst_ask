<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
	<style>
		span{color: red};
	</style>
</head>
<body>
		<form method="post" action="{{ url('update/'.$alf->id)}}">
		@csrf
	<h1>Edit Details</h1>
	Name:<input type="text" name="name" value="{{$alf->name}}"><br>
	<span>@error('name'){{$message}}@enderror</span><br>
	Email:<input type="text" name="email" value="{{$alf->email}}"><br>
	<span>@error('email'){{$message}}@enderror</span><br>
	Phone:<input type="number" name="phone" value="{{$alf->phonenumber}}"><br>
	<span>@error('phone'){{$message}}@enderror</span>
	<input type="submit" name="" value="save">
</form>
<a href="/">Add NEw</a>

</body>
</html>