

<?php 


if(isset($_POST['submit'])){
//  this starts a session
    session_start();


// cookie for Gender 

setcookie('gender', $_POST['gender'], time() + 86400); // this is getting the value of the cookie as well as how long it will last



    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
        <select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>