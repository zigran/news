<?php
include "db.php";

if(isset($_GET['id'])){
	$newsId=$_GET['id'];

	$delete= "DELETE FROM panel WHERE id=$newsId";

	$sql=mysqli_query($conn,$delete);
	 
	if($sql){
		header('Location:adminpanel2.php');
	}else{
		echo "error";
	}

}else {
	echo 'Please select id';
}

?>