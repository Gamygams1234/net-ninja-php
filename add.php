<?php 

    // this will check if any values have been set
    // if the submit value has been set, then the code will run
	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['title'] . '<br />';
	// 	echo $_GET['ingredients'] . '<br />';
    // }
    

// this did the same thing but it is more secure and does not show up in the URL
	if(isset($_POST['submit'])){
        // this will protect us from XSS attacks
		echo htmlspecialchars($_POST['email'] . '<br />');
		echo htmlspecialchars($_POST['title'] . '<br />');
		echo htmlspecialchars($_POST['ingredients'] . '<br />');
	}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<label>Pizza Title</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>