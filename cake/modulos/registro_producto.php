<?php 

	$email= $_GET["email"];
	$product_name= $_GET["productname"];
	$description= $_GET["descripcion"];
	$price=$_GET["precio"];
	$imagen=$_GET["imagen"];




	require_once("conexion.php");
	//echo "select * from chef where email like ' $email'";
	$sql="SELECT idUsuario,	username FROM chef WHERE email LIKE '$email'";
	$res= mysql_query($sql);
		          if($res === FALSE) { 
             die(mysql_error()); // TODO: better error handling
            }

	$id=mysql_fetch_row($res);

	
	interface cake{
		public function setVariableName($var);
		public function setVariablePrice($var);
		public function setVariableDesc($var);
		public function setVariableChef($var);
	}
	class thecake implements cake{
		private $cake_name;
		private $cake_price;
		private $cake_description;
		private $cake_chef;

		public function setVariableName($var){
					$this->cake_name=$var;
		}
		public function setVariablePrice($var){
			$this->cake_price=$var;
		}
		public function setVariableDesc($var){
			$this->cake_description=$var;
		}
		public function setVariableChef($var){
			$this->cake_chef=$var;
		}

	}

	$concreteCake= new  thecake();
	$concreteCake->setVariableName($product_name);
	$concreteCake->setVariablePrice($price);
	$concreteCake->setVariableDesc($description);
	$concreteCake->setVariableChef($id[0]);

	$imagen=base64_encode(file_get_contents("../php/images/".$imagen));
	//echo '<script>alert("'.$imagen.'")</script>';
	$registro = mysql_query("INSERT INTO productos (idProduct,idChef,product_name,description,price,imagen) VALUES 
							(NULL,'$id[0]','$product_name','$description','$price','$imagen')");
		if($registro === FALSE) { 
             die(mysql_error()); // TODO: better error handling
             $this->assertEquals($registro,FALSE);
            }

    echo	" <form  action=\"../php/chef.php\" method=\"get\">";
	echo	" 	 <input type=\"hidden\" name=\"name\" value=\"".$id[1]."\"  >";
	echo    "	<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >"; 
	echo 	" </form>";

	?>

	<script> document.forms[0].submit(); </script>

	<?php


 ?>
