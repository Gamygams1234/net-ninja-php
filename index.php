  
<?php 
// connect to database

$conn = mysqli_connect('localhost', 'gamy', 'test1234', 'gamygams_pizza');

// check connection
// this will warn us if there is an error at all in our database
if (!$conn){
	echo "Connection error: " . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>