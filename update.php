<?php
include "db.php";

$newsId=$_GET['id'];

$select= "SELECT * FROM panel WHERE id=$newsId";
$result=mysqli_query($conn,$select); 
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="POST">
     
        <input type="text" name="title" placeholder="Title" value="<?php echo $row['title']?>">	
        <input type="text" name="description" placeholder="Description" value="<?php echo $row['description']?>">
        <textarea rows="10" cols="100" name="text" placeholder="Text"><?php echo $row['text']?></textarea>	
        <input type="text" name="image_src" placeholder="Image source" value="<?php echo $row['image_src']?>">
        <input type="radio" name="status" value="1">Active
        <input type="radio" name="status" value="0">Inactive
        <input type="date" name="date" value="<?php echo $row['date']?>">
        <input type="time" name="time" value="<?php echo $row['time']?>">
        <input type="submit" name="submit" placeholder="SEND">	

     </form>

</body>
</html>

<?php 

if(isset($_POST['submit'])) {

	$title=$_POST['title'];
	$description=$_POST['description'];
	$text=$_POST['text'];
	$image_src=$_POST['image_src'];
	//$status=$_POST['status'];
	$date=$_POST['date'];
	$time=$_POST['time'];

	

	$update="UPDATE panel SET title='$title', description='$description', text='$text', image_src='$image_src', date='$date', time='$time' WHERE id=$newsId";


	$conUpdate=mysqli_query($conn,$update);


	if($conUpdate) {
		header ('Location:adminpanel.php');
		
	}else {
		echo "Error";
	}

}


?>