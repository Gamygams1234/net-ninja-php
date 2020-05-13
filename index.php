<?php
$peopleOne = ['john', 'Hugo', 'Eddie'];

// this is another way to make an array 
$peopleTwo = array('Grant', 'Chris', 'Cullen');
// this will be how we merge all of the people
$peopleThree = array_merge($peopleOne, $peopleTwo);
// associative arrays


$ninjasOne = ['Gamy'=> 'black', 'Mario' => 'orange', 'Luigi' => 'blue'];
 
$ninjasOne['Lorenz'] = 'black';
// we can change tha value of a multi dimensional array
$ninjasOne['Luigi'] = 'grey';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
<div><?php echo $peopleOne[1]?></div>
<div><?php echo $peopleOne[1]?></div>
<!-- this will give us the length of the array -->
<div><?php echo count($peopleOne)?></div>
<div><?php echo count($peopleOne)?></div>
<!--  this will show us all the values in the array -->
<div><?php echo print_r($peopleThree)?></div>


<div><?php echo $ninjasOne['Gamy'];?></div>
<div><?php echo print_r($ninjasOne)?></div>



</body>
</html>