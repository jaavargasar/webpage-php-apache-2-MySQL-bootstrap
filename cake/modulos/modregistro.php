<?php 

	$username= $_POST["username"];
	$email= $_POST["email"];
	$password= $_POST["password"];
	$gender=$_POST["gender"];

	//echo "el nombre de usuario es " . $username .$email .$password;
	//conect to DB
	require_once("conexion.php");

	//validation
	//user already regitered
	
	$validation = mysql_query("select email,username from usuario where email like '" .$email. "'");
	$validationchef = mysql_query("select email,username from chef where email like '" .$email. "'");
	

	
	$userDB= mysql_fetch_row($validation);
	$userDBchef=mysql_fetch_row($validationchef);

	if ( ($userDB[0] == $email) || ($userDBchef[0]==$email ) ){
		?>
			<script type="text/javascript"> alert("Ya existe este usuario");</script>
		<?php
		$this->assertEquals($userDB[0],$email);
		$this->assertEquals($$userDBchef[0],$email);
	}
	else{
		//register
	
		if( $gender=="chef"){
			$registro = mysql_query("INSERT INTO chef (idUsuario,username,password,email) VALUES (NULL,'$username','$password','$email')");

			//echo	" <form  action=\"../php/chef.php\" method=\"get\">";
			//echo	" 	 <input type=\"hidden\" name=\"name\" value=\" ".$userDBchef[1]."\"  >";
			//echo	" 	 <input type=\"hidden\" name=\"email\" value=\" ".$userDBchef[0]."\"  >";
			//echo 	" </form>";
		}
		else{
			$registro = mysql_query("INSERT INTO usuario (idUsuario,username,password,email) VALUES (NULL,'$username','$password','$email')");
			//echo	" <form  action=\"../php/user.php\" method=\"get\">";
			//echo	" 	 <input type=\"hidden\" name=\"name\" value=\" ".$userDB[1]."\"  >";
			//echo 	" </form>";
		}

		if(! $registro){
			?>
				<script> alert("NO registrado");</script>
			<?php
		}
		else{
			
			?>
			<script>alert("Ya se encuentra registrado,por favor ingrese de nuevo.")
			<?php

			header('Location: ../php/login.php');
			exit();
			

			

		}
	
	}

	?>
	<script> 
		function hack(){
			document.forms[0].submit();
			document.forms[1].submit();
		}
	</script>
	<body onload="hack()">
	</body>
	<?php


 ?>