<?php 

	$email= $_GET["email"];
	$descripcion =$_GET["descripcion"];
	//echo $email;

	require_once("conexion.php");
	$sql="SELECT idUsuario,username FROM chef WHERE email LIKE '$email'";


	$userid= mysql_query($sql);
	if($userid==false){
		die(mysql_error());
		$this->assertEquals($userid,FALSE);
	}	
	$id=mysql_fetch_row($userid);


	$sql2="SELECT descripcion FROM descripcion WHERE idChef LIKE '$id[0]'";
	$userid2= mysql_query($sql2);
	$id2=mysql_fetch_row($userid2);

	if($id2!=$descripcion){

		$sql3=mysql_query("DELETE FROM descripcion WHERE idChef = '$id[0]' " );
	}


	$registro = mysql_query("INSERT INTO descripcion (idChef,descripcion) VALUES ('$id[0]','$descripcion')");

	echo	" <form  action=\"../php/chef.php\" method=\"get\">";
	echo	" 	 <input type=\"hidden\" name=\"name\" value=\"".$id[1]."\"  >";
	echo    "	<input type=\"hidden\" name=\"email\" value=\"".$email."\"  >"; 
	echo 	" </form>";

	?>
		<script> document.forms[0].submit(); </script>
	<?php
	
 ?>