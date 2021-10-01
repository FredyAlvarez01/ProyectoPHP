<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de notas </title>
</head>
<body>
	

	<h1> Inicio de sesion   </h1>


<form action="Usuarios/Controladores/Login.php" method="POST" accept-charset="utf-8">
Usuarios <br>
<input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br> <br>
Contraseña <br>
<input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña"><br> <br>

<input type="submit" value ="Iniciar sesión">
</form>
</body>
</html>