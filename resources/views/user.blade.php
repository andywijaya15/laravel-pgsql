<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
 
<h1>Data User</h1>
 
<ul>
	@foreach($users as $u)
		<li>{{ "Nama : ". $u->name . ' | Email : ' . $u->email }}</li>
	@endforeach
</ul>
 
</body>
</html>