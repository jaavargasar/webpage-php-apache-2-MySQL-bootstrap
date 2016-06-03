<!DOCTYPE html>

<html>
<head>
    <title>Ingersar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Adding Boostrap CSS-->
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--modifications to some features by default on bootstrap-->
</head>


<body>
	<div class="container" >
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          <form class="form-horizontal" action="check.php" method="POST">
            <fieldset>
              <div >
                <h1 align="center">Ingresa  en </h1>    <h1 style="font-family: 'Lobster'" align="center">Cake</h1> 
              </div>
              <div class="control-group">
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                  <input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
                  
                </div>
              </div>
           
              <div class="control-group">
                <label class="control-label" for="password">Contraseña</label>
                <div class="controls">
                  <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                  
                </div>
              </div>
              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-primary">Ingresar</button>
                </div>
              </div>
            </fieldset>
          </form>
            <a href="register.php" class="text-center new-account" > Create una cuenta </a>
        </div>
    </div>
</div>


<!--footer-->

<?php
  $aux=$_GET["aux"];
  if($aux=="true"){
    ?>
      <script>alert("Ya se encuentra registrado,por favor ingrese de nuevo.")
    <?php
  }


?>

    

  <div class="footer navbar-fixed-bottom" style="background-color: #317873">
    <br><br>
    <div class="row">
      <div class="col-sm-6" style="text-align: center">
          <a href="#">
            <img src="images/facebook-icon.png" height="40" width="40">
          </a>
          <a href="#">
            <img src="images/instagram-icon.png" height="55" width="55">
          </a>
      </div>
      <div class="col-sm-6" style="text-align:center">
        
          <a href="#" style="color: white">
            About us
          </a>
          <br>
          <a href="#" style="color :white">
            Contact us
          </a>

      </div>
    </div>
    <div class="row">
      <div class="row-sm-12" style="text-align: center;">
        <small> &copy; 2016 Cake</small>
      </div>
    </div>
  </div>


 



</body>
</html>