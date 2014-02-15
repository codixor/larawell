<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Check the environment</title>
</head>
<body>
Debug: 
@if(Config::get('app.debug'))
	<span style="color:green">true</span>
@else
	<span style="color:red">false</span>
@endif
</body>
</html>
