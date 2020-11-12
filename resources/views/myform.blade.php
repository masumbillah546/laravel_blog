
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<form method="post" action="process">
	    Name: <input type="text" name="name"><br>
	    Email: <input type="text" name="email"><br>
	    Phone: <input type="text" name="phone"><br>
	    <?php echo csrf_field();?>
	    <input type="submit" name="submit" value="send">
	</form>


</body>
</html>
