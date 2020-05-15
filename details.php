<?php 
// we want to make a connection to the database to start off
    include('config/db_connect.php');
    
    
	if(isset($_POST['delete'])){
        // getting the value of the hidden input field
		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

		if(mysqli_query($conn, $sql)){
            // this will be the success
			header('Location: index.php');
		} else {
            // this will show the error on the screen
			echo 'query error: '. mysqli_error($conn);
		}

	}


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

	<!-- DELETE FORM -->
    <!-- the action is the file that we want to run on -->
    <form action="details.php" method="POST">
    <!-- this will not be shown on the field,  -->
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
                <!-- this will be shown as the delete -->
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such pizza exists.</h5>
		<?php endif ?>
	</div>

<?php include('templates/footer.php'); ?>


</html>