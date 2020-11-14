<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Entry Form</title>
</head>
<body>
	<h2>Student List</h2>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th colspan="2">Action</th>
			
		</tr>
		<?php foreach($req as $row){ ?>
		<tr>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->name ?></td>
			<td><?php echo $row->email ?></td>
			<td><?php echo $row->phone ?></td>
			<!-- <td><a href="http://localhost/laravel_blog/public/edit/<?php echo $row->id ?>">Edit</a></td> -->
			<td><a href="/edit/<?php echo $row->id ?>">Edit</a></td>
			<!-- <td><a href="http://localhost/laravel_blog/public/delete/<?php echo $row->id ?>">Delete</a></td> -->
			<td><a href="/delete/<?php echo $row->id ?>">Delete</a></td>
			
		</tr>
	<?php }?>
	</table>
</body>
</html>