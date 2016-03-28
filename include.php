<?php

include "db.php";

$sql="SELECT * FROM panel";

$include=mysqli_query($conn,$sql); 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="materialize.min.css">
</head>
<body>
<table class="responsive-table">
    <tr>
		<td><b>Page title</b></td>
	</tr>

	<?php while ($row=mysqli_fetch_assoc($include)): ?>
	<tr>
		<td><?php echo $row['title'] ?></td>
		<td><a href=edit.php?id=<?php echo $row['id'] ?> class="waves-effect waves-light btn">Edit</a></td>
		<td><a href=delete.php?id=<?php echo $row['id'] ?> class="waves-effect waves-light btn">Delete</a></td>
		<td><a href=create.php?id=<?php echo $row['id'] ?> class="waves-effect waves-light btn">Create</a></td>
	</tr>
	<?php endwhile; ?>

</table>
</body>
</html>

