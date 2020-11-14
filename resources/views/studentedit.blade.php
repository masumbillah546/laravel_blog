<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Entry Form</title>
</head>
<body>
	<h2>Student Edit Form</h2>
	<form action="update" method="post">
		<label>Name</label>
		<input type="text" name="stname" placeholder="Student Name" value="<?php echo $rows->name?>"><br>
		<label>Email</label>
		<input type="text" name="email" placeholder="Student Email" value="<?php echo $rows->email?>"><br>
		<label>Phone</label>
		<input type="text" name="phone" placeholder="Student Phone" value="<?php echo $rows->phone?>"><br>
		<input type="hidden" name="id"  value="<?php echo $rows->id?>">
		<input type="submit" name="submit" value="Update">
		<?php echo csrf_field();?>
	</form>
</body>
</html>