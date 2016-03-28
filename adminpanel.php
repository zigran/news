<?php

include "db.php";

$sql="SELECT * FROM panel";

$allnews=mysqli_query($conn,$sql); 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Description</th>
		<th>Text</th>
		<th>Image source</th>
		<th>Status</th>
		<th>Date</th>
		<th>Time</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($allnews)): ?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['description'] ?></td>
		<td><?php echo $row['text'] ?></td>
		<td><?php echo $row['image_src'] ?></td>
		<td><?php echo $row['status'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['time'] ?></td>
		<td><a href=delete.php?id=<?php echo $row['id'] ?>>Delete</a></td>
		<td><a href=update.php?id=<?php echo $row['id'] ?>>Update</a></td>
	</tr>
	<?php endwhile; ?>
</table>
</body>
</html>