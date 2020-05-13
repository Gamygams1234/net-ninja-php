<?php
 $stringOne = 'My email is ';
 $stringTwo = 'gamyburgos@gmail.com';
 $name = 'Gamy';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>


<div><?php echo $stringOne.$stringTwo; ?> </div>
<!-- we can concat strings with variables -->
<div><?php echo 'Hey my name is '.$name; ?> </div>
<!--  we can use the doulbe quotes to just put down the quote -->
<div><?php echo " I am the real $name" ;?> </div>

<!-- putting the backslash for the quotes -->
<div><?php echo "Cow says \"moo\"" ;?> </div>
<div><?php echo 'Duck says "quack"' ;?> </div>
<!-- this will get certain letters out of the string -->
<div><?php echo $stringOne[3] ?> </div>
</body>
</html>