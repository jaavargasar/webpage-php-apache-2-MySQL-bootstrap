<!DOCTYPE html>
<html>
<head>
    <title>Cake</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Adding Boostrap CSS-->
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--modifications to some features by default on bootstrap-->
    <style>
      .jumbotron{
        margin-bottom: 0;
        background-color: #44D7A8;
      }

    </style>
</head>
<body>
	
<?php

		session_start();

		$regValue = $_GET["name"];
  		$email= $_GET["email"];

		//echo "Your registration is: ".$regValue.".";

	?>
  <!--navigationbar-->
  <div class="jumbotron jumbotron-fluid">
    <div class="navbar ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="images/Cake-logo.png" alt="" height="80" width="80">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="../php/index.php"style="color:black" ><span class="glyphicon glyphicon-user"></span> logout </a></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="container text-center">
      <h1 style="font-family: 'Lobster'">Cake</h1>
      <p>Choose from the best</p>
        <?php
          $username= $_GET["name"];
          echo "<p> welcome ".$username."</p> ";
        ?>
    </div>
  </div>

<div class= "container text-center">
	<h2>Danos una buena presentacion</h2>
</div>
<form action="../modulos/registro_descripcion.php" method="get">
	<div class="form-group">
	  <label for="descripcion" class="col-sm-2">Describete:</label>
	  <textarea class="form-control" rows="5" name="descripcion" ></textarea>
	</div>

<div class = "container text-center">	
	  <button type="submit" class="btn btn-primary">Submit</button>
	  </div>
    <?php
      echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
    ?>

</form>


</body>
</html>