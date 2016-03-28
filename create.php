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
    
        <input type="submit" name="submit" placeholder="SEND">	

    </form>

</body>
</html>

<?php 

if(isset($_POST['submit'])) {

	$title=$_POST['title'];
	

	$edit="INSERT INTO panel (title) VALUES ('$title')";
	

	$conEdit=mysqli_query($conn,$edit);


	if($conEdit) {
		header ('Location:adminpanel2.php');
		
	}else {
		echo "Error";
	}

   }


?>