  
<?php 


 include('config/db_connect.php');


$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at'; // this is a way we can order the data that we get



// make query and get results
$result = mysqli_query($conn, $sql); // using the connection and sql as variables

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); // this will return an associative array

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>
	
	<h4 class="center grey-text">Pizzas!</h4>
	<div class="container">
		<div class="row">
		<!-- here we are using the same syntax as well -->
			<?php foreach($pizzas as $pizza): ?>
		
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">				
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>		
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						
						<div class="card-action right-align">
							<a class="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>

				<?php endforeach; ?>

		

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>