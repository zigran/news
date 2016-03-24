<?php

    $server="localhost";
    $username="root";
    $userpass="";
    $dbname="news";

$conn=mysqli_connect($server,$username,$userpass,$dbname);

if (!$conn) {
	echo "lalalla";
}

?>