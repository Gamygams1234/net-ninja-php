<?php
//$name = 'Yoshi';
$age = 30;
//echo $name;
define('NAME', 'Yoshi');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    <h1><?php echo NAME;?><h1>
<div>Age: <?php echo $age?></div>
</body>
</html>