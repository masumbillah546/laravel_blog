<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Entry Form</title>
</head>
<body>
	<h2>Student Entry Form</h2>
	<form action="studentsform2" method="post">
		<input type="text" name="stname" placeholder="Student Name"><br>
		<input type="submit" name="submit" value="Submit">
		<?php echo csrf_field();?>
	</form>
</body>
</html>