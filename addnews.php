<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	      input{
	      	display:block;
	      	margin:5px;
	      	padding:10px;
	      }


	</style>
</head>
<body>
     <form action="connect.php" method="post">
     
         <input type="text" name="title" placeholder="Title">	
         <input type="text" name="description" placeholder="Description">
         <textarea rows="10" cols="100" name="text" placeholder="Text"></textarea>	
         <input type="text" name="image_src" placeholder="Image source">
         <input type="radio" name="status" value="1">Active
         <input type="radio" name="status" value="0">Inactive
         <input type="date" name="date">
         <input type="time" name="time">
         <input type="submit" placeholder="SEND">	

     </form>


</body>
</html>