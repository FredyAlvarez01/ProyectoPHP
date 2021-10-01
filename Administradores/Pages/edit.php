<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de notas</title>
</head>
<body>
	
<h1>Editar Administrador </h1>

<form method="POST" action="../Controladores/edit.php">
	<input type="hidden" name="Id" value="">

	Nombre <br>
	<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
	Apellido <br>
	<input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"><br><br>
	Uriario <br>
	<input type="text" name="Uriario" required="" autocomplete="off" placeholder="Uriario"><br><br>
    Password <br>
	<input type="text" name="Password" required="" autocomplete="off" placeholder="Password"><br><br>
	Estado <br>
	<select name="Estado" required="" id="">
		<option value="">Seleccione</option>
		<option value="Activo">Activo</option>
		<option value="Inactivo">Inactivo</option>

	</select><br><br>

	<input type="submit" value="Editar Administrador">
</form>

</body>
</html>