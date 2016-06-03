<?php

	$email= $_POST["email"];
	$password= $_POST["password"];

	require_once("../modulos/conexion.php");

	$validation = mysql_query("select email,password,username from usuario where email like '" .$email. "'");
	$validationchef = mysql_query("select email,password,username from chef where email like '" .$email. "'");

	$userDB= mysql_fetch_row($validation);
	$userDBchef=mysql_fetch_row($validationchef);

	
	
	if ( ($userDB[0] == $email) && ($userDB[1]==$password) ){
		
		echo	" <form  action=\"user.php\" method=\"get\">";
		echo	" 	 <input type=\"hidden\" name=\"name\" value=\"".$userDB[2]."\"  >";
		echo    "	<input type=\"hidden\" name=\"email\" value=\"".$userDB[0]."\"  >"; 
		echo 	" </form>";

		
	}
	else if( ($userDBchef[0]==$email) && ($userDBchef[1]==$password ) ){
		echo	" <form  action=\"chef.php\" method=\"get\">";
		echo	" 	 <input type=\"hidden\" name=\"name\" value=\"".$userDBchef[2]."\"  >";
		echo	" 	 <input type=\"hidden\" name=\"email\" value=\"".$userDBchef[0]."\"  >";
		echo 	" </form>";
		
	}
	else{
		?>
			<script>alert("El usuario NO existe");</script>

		<?php
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