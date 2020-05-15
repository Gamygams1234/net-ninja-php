<?php 

//  putting down our connection for our php
include('config/db_connect.php');

// first we are creating variables

// these variables need to be set first if not, we will get undefined
$email = $title = $ingredients = '';

$errors = array('email' => '', 'title' => '', 'ingredients' => '');

	if(isset($_POST['submit'])){
      // check email
        if (empty($_POST['email'])){
            $errors['email']  =  'An email is requried';
        } else {
           $email = $_POST['email'];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email']  =  "email must be a valid email address";
           }
        }
        
              // check title
              if (empty($_POST['title'])){
                $errors['title']  =  'A title is requried';
            } else {
                $title = $_POST['title'];
                if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                    $errors['title']  = 'Title must be letters and spaces only';
                }
            }
                  // check ingredients
        if (empty($_POST['ingredients'])){
            $errors['ingredients']  = 'At least one ingredient is requried';
        } else {
            $ingredients = $_POST['ingredients'];
            // this is checking for a comma seperated list
        	if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients']  = 'Ingredients must be a comma separated list';
        }
    } 

    
		if(array_filter($errors)){
		echo 'errors in form';
		} else {
            // there are other ways to do this
            // we are passing in the connection first, then our post
            $email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            // create sql
            // we are inserting those three thing into our sql
            
			$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";
        
        // save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
                // this will show the error if it does not work for us
				echo 'query error: '. mysqli_error($conn);
			}

      }
    }// end
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
            <!-- this will make sure that the value stays the value when there is an error -->
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>