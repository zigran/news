<?php
include "db.php";
$title=$_POST['title'];
$description=$_POST['description'];
$text=$_POST['text'];
$image_src=$_POST['image_src'];
$status=$_POST['status'];
$date=$_POST['date'];
$time=$_POST['time'];


$query="INSERT INTO panel (title,description,text,image_src,status,date,time) VALUES ('$title','$description','$text','$image_src','$status','$date','$time')";

$addData=mysqli_query($conn,$query);

if($query){
	echo "yay!";
}



?>