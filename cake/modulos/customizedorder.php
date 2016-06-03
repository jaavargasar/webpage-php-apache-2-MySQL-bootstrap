<!DOCTYPE html>
<html>
<head>
  <head>
    <title>Cake</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <style>
      .jumbotron{
        margin-bottom: 0;
        background-color: #44D7A8;
      }
    </style>
</head>
<body>
				    <?php
          $username= $_GET["name"];
          $email=$_GET["email"];
          $idChef=$_GET["idChef"];
          $product_name=$_GET["product_name"];
          echo $email;
          echo $idChef;
          echo $product_name;
          require_once("conexion.php");
          $records = mysql_query("select username,product_name, description,price,imagen,idChef from chef INNER JOIN productos where idChef like idUsuario");
          if($records === FALSE) { 
             die(mysql_error()); 
            }
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
            Cake Logo
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"style="color:black" ><span class="glyphicon glyphicon-user"></span> Username </a></li>
          <li><a href="#"style="color:black" ><span class="glyphicon glyphicon-user"></span> logout </a></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="container text-center">
      <h1 style="font-family: 'Lobster'">Cake</h1>
      <p>Choose from the best</p>
    </div>
  </div>


<div class="container">
      <h2></h2>           
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Recubrimiento</th>
		        <th>Extras</th>
		        <th>Ocacion</th>
		      </tr>
		    </thead>
		    <tbody>
			<tr>
		        <th>Vainilla</th>
		        <th>Galletas</th>
		        <th>Normal</th>
		     </tr>

			<tr>
		        <th>Fresa</th>
		        <th>Chispitas</th>
		        <th>Cumpleaños</th>
		     </tr>
		     <tr>
		        <th>Chocolate</th>
		        <th>Caramelo</th>
		        <th>Aniversario</th>
		     </tr>

		    </tbody>
		  </table>
	</div>

<form action="registro_customized_order.php" method="GET">
	
	<div class="form-group">
		<label class="col-sm-2">Sabor</label>
		<label class="checkbox-inline"><input type="text" name="sabor"></label>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Extras</label>
		<label class="checkbox-inline"><input type="text" name="extras"></label>

	</div>

	<div class="form-group">
		<label class="col-sm-2">Ocacion</label>
		<label class="checkbox-inline"><input type="text" name="oc"></label>

	</div>


	<div class = "container text-center">	
	  <button type="submit" class="btn btn-primary">Submit</button>
	 </div>
    <?php
      echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
      echo  "<input type=\"hidden\" name=\"idChef\" value=\"".$idChef."\"  >";
      echo  "<input type=\"hidden\" name=\"product_name\" value=\"".$product_name."\"  >";
    ?>

</form>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->

</body>
</html>