<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php
          $email=$_GET["email"];
          $idChef=$_GET["idChef"];
          $product_name=$_GET["product_name"];
          $sabor=$_GET["sabor"];
          $extras=$_GET["extras"];
          $oc=$_GET["oc"];

        

          //echo $email;
          //echo $product_name;
          //echo $idChef;
          //echo $sabor;
          //echo $extras;
          //echo $oc;
          require_once("conexion.php");
          $query="INSERT INTO solicitudes (idSolicitud,idChef,product_name,email,sabor,extras,ocacion)
          						values(NULL,'$idChef','$product_name','$email','$sabor','$extras','$oc')";
          $registro=mysql_query($query);
          if($registro==FALSE){
          	die(mysql_error());
               $this->assertEquals($registro,FALSE);
          }
      
          $sql="SELECT username FROM usuario WHERE email LIKE '$email'";
          $res= mysql_query($sql);
                    if($res === FALSE) { 
                         die(mysql_error()); // TODO: better error handling
                         $this->assertEquals($res,FALSE);
                    }

          $id=mysql_fetch_row($res);


          echo  " <form  action=\"../php/user.php\" method=\"get\">";
          echo "     <input type=\"hidden\" name=\"name\" value=\"".$id[1]."\"  >";
          echo    " <input type=\"hidden\" name=\"email\" value=\"".$email."\"  >"; 
          echo  " </form>";

      ?>
     <script> document.forms[0].submit(); </script>

</body>
</html>