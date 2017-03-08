<?php
if(isset($_post["user"])) $user = $_post["user"];
else $user = ("Error! ingrese usuario");
if(isset($_post["pass"]))  $pass = $_post["pass"];
else $paass = ("Error! Su password");
 	
echo <<<_END
<html lang="es">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login</title>
 	<link rel="stylesheet" href="">
 </head>
 
 <body>
 Tu nombre es $user<br>
 	<fieldset>
 	<form action="name.php" method="post" accept-charset="utf-8">
 		<legend>Ingrese user/password</legend>
 		<legend>Usuario</legend><input type="text" name="user" value="usuario"><br>
 		<legend>Password</legend><input type="password" name="pass"><br>
 		<input type="submit" name="">
 	</fieldset>
 	</form>

  </body>
 </html>
_END;
 ?>