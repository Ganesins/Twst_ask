<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>list</title>
	<style>
		table,th,td{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h1>Users List</h1>
	<table border="2">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($alfy as $alf)
		<tr>
			<th>{{$alf->name}}</th>
			<th>{{$alf->email}}</th>
			<th>{{$alf->phonenumber}}</th>
			<th><a href="edit/{{$alf->id}}">Edit</a></th>
			<th><a href="delete/{{$alf->id}}">Delete</a></th>

		</tr>
		@endforeach
	</table>
	<a href="/">Add More</a>

</body>
</html>