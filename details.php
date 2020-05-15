<?php 
// we want to make a connection to the database to start off
	include('config/db_connect.php');


	// check GET request id param
	if(isset($_GET['id'])){ // this is checking if that is set. 
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM pizzas WHERE id = $id"; // this is selecting one field unlike in the index

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$pizza = mysqli_fetch_assoc($result);// thie assoc is to fetch when there is one thing 

		mysqli_free_result($result);
		mysqli_close($conn);

	}


?>


<!DOCTYPE html>
<html>


	
<?php include('templates/header.php'); ?>
<div class="container center">
		<?php if($pizza): ?>
			<h4><?php echo $pizza['title']; ?></h4>
			<p>Created by <?php echo $pizza['email']; ?></p>
			<p><?php echo date($pizza['created_at']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo $pizza['ingredients']; ?></p>
		<?php else: ?>
			<h5>No such pizza exists.</h5>
		<?php endif ?>
	</div>

<?php include('templates/footer.php'); ?>


</html>