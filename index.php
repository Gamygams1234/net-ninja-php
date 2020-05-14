  
<?php 
// connect to database

$conn = mysqli_connect('localhost', 'gamy', 'test1234', 'gamygams_pizza'); // taking 4 items. (localhost, username, passwoed, the name of the actual database)


if (!$conn){
	echo "Connection error: " . mysqli_connect_error();
}
// write query for all of the pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas';// we can use * for all of the items, however, we are only getting certain items


// make query and get results
$result = mysqli_query($conn, $sql); // using the connection and sql as variables

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); // this will return an associative array

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

print_r($pizzas);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>