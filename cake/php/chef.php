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
    $username=$_GET["name"];
    $email=$_GET["email"];
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
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"style="color:black">Home</a></li>
        
         
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="index.php" style="color:black" ><span class="glyphicon glyphicon-user"></span> logout </a></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="container text-center">
      <h1 style="font-family: 'Lobster'">Cake</h1>
      <p>Choose from the best</p>
      <?php
      session_start();
        echo "<p> welcome ".$username."</p> ";
        //$_SESSION['name'] = $regValue;
      ?>
  
    </div>
  </div>

  <!--Content-->
  <div class="container-fluid" >    
  <div class="row">
    <div class="col-sm-4"  >
      <h1 style="text-align: center; font-family: 'Lobster'" >Solicitudes</h1>
      <form action="../modulos/solicitudes_list.php" method="GET">
        <input type="image" src="images/request.jpg" height="300" width="304" class="img-responsive center-block">
              <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
              ?>
      </form>
    </div>
    <div class="col-sm-4">
      
        <h1 style="text-align: center ; font-family: 'Lobster'"> Productos </h1>
          
          <form action="productos_form.php" method="get" >
              <input type="image" src="images/products.jpg" height="300" width="304" class="img-responsive center-block">
              <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
              ?>
          </form>

    </div>
    <div class="col-sm-4"> 
      <h1 style="text-align: center ; font-family: 'Lobster'"> Sobre mi </h1>
      <a href="#">
        <form action="descripcion_form.php" method="get" >
              <input type="image" src="images/user.png"  height="350" width="344" class="img-responsive center-block">
              <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
              ?>
          </form>
      </a>
    </div>
  </div>
</div><br>




  <!--footer-->

  <div class="container-fluid" style="background-color: #317873">
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
        

      </div>
    </div>
    <div class="row">
      <div class="row-sm-12" style="text-align: center;">
        <small> &copy; 2016 Cake</small>
      </div>
    </div>
  </div>

  <!--Adding jquery-->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>




  </body>
</html>
