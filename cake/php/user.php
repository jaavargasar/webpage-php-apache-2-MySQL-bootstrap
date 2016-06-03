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
          $username= $_GET["name"];
          $email=$_GET["email"];
          /*
          echo $username;
          echo $email;
          require_once("../modulos/conexion.php");

          $records = mysql_query("select * from productos");
          if($records === FALSE) { 
             die(mysql_error()); // TODO: better error handling
            }
          echo "recors".$records;
          */
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
      <form action="../modulos/tienda.php" method="get">
        <ul class="nav navbar-nav">
        
          <li class="active"><button class="btn btn-trans" style="background:#44D7A8"><a href="index.php"style="color:black">Home</a>
          </button></li>
              <li> <button class="btn btn-trans" style="background:#44D7A8"><a style="color:black">Tienda</a></button></li>
                <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
                ?>
        </ul>
        </form>
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
          $username= $_GET["name"];
          echo "<p> welcome ".$username."</p> ";
        ?>
    </div>
  </div>
  
  <!--Content-->
  <div class="container-fluid" >    
  <div class="row">
    <div class="col-sm-4"  >
      <h1 style="text-align: center; font-family: 'Lobster'" >Chefs</h1>
      
      <form action="../modulos/chef_list.php" method="GET">
      <input type="image" src="images/chefhat.jpg" height="300" width="304" alt="Submit Form" class="img-responsive center-block"/>
        
                <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
                ?>
      </form>
      
    </div>
    <div class="col-sm-4"> 
        <h1 style="text-align: center ; font-family: 'Lobster'"> Events </h1>
          <a href="#">
            <img src="images/events.png"  height="300" width="304" class="img-responsive center-block">
          </a>
    </div>
    <div class="col-sm-4"> 
      <h1 style="text-align: center ; font-family: 'Lobster'"> Customized </h1>
      <form action="../modulos/customized.php" method="GET">
        <input type="image" src="images/customized.jpg" height="350" width="344" class="img-responsive center-block"/>
                <?php
                echo  "<input type=\"hidden\" name=\"name\" value=\"".$username."\"  >";
                echo  "<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >";
                ?>
      </form>
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
