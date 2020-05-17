<?php  
 session_start();


 if ($_SERVER['QUERY_STRING'] == 'noname'){
// this is how to unset only one variable
  //unset( $_SESSION['name']);

  
// this would unset everything
  session_unset();
 }

 $name =  $_SESSION['name'];

?>


<head>
	<title>Gamygams Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
      form {
          max-width : 460px;
          margin: 20px auto;
          padding : 20px;
      }
      .pizza {
        width : 100px;
        margin: 40px auto -30px;
        display: block;
        position: relative;
        top: -30px;

      }
  </style>
</head>
<!-- This will make the background a bit lighter than before -->
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="/tutorials" class="brand-logo center brand-text">Gamygams Pizza</a>
      <!-- this will hide tha navigation when it is small -->
      <ul id="nav-mobile" class="right hide-on-small-and-down">
      <!-- making it look like a button -->

      <li class = "grey-text">Hello <?php echo $name; ?> </li>
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>