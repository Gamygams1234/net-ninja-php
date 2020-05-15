<?php


$conn = mysqli_connect('localhost', 'gamy', 'test1234', 'gamygams_pizza'); // taking 4 items. (localhost, username, passwoed, the name of the actual database)


if (!$conn){
	echo "Connection error: " . mysqli_connect_error();
}

?>
