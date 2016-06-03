<!DOCTYPE html>
<html>
<head>
<title>Tienda</title>
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
          $username= $_GET["name"];
          $email=$_GET["email"];
          //echo $username;
          //echo $email;
          require_once("../modulos/conexion.php");

          $records = mysql_query("select username,product_name, description,price,imagen from chef INNER JOIN productos where idChef like idUsuario");
          if($records === FALSE) { 
             die(mysql_error()); // TODO: better error handling
             $this->assertEquals($records,FALSE);
            }
          //echo "recors".$records;

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
            <img src="../php/images/Cake-logo.png" alt="" height="80" width="80">
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
		        <th>chef</th>
		        <th>nombre del producto</th>
		        <th>descripcion</th>
		        <th>precio</th>
		      </tr>
		    </thead>
		    <tbody>



		     <?php 
		     		while($row = mysql_fetch_assoc($records)){
		     			echo "<tr>";
		     			echo "<td>".$row['username']."</td>";
		     			echo "<td>".$row['product_name']."</td>";
		     			echo "<td>".$row['description']."</td>";
		     			echo "<td>".$row['price']."</td>";
              echo '<td> <img width="100" height="100" src="data:image/jpeg;base64,'.$row['imagen'].'"></td>';
		     			//echo '<td> data:' mime_content_type(filename)
              echo "</tr>";
		     		}
		      ?>
		      
		    </tbody>
		  </table>
	</div>


</body>

</html>