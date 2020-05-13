<?php
	$blogs = [
		['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
		['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
		['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
    ];

    // this will add one to the end
    
    $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
<div> <?php echo print_r($blogs); ?></div>
<!-- this will pop the item -->
<div> <?php $popped = array_pop($blogs); ?></div>
<div> <?php echo print_r($blogs); ?></div>
<!-- this will print out the popped item in the array -->
<div> <?php echo print_r($popped); ?></div>

</body>
</html>