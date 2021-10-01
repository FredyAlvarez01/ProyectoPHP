<?php 
require_once ('../../Usuarios/Modelo/Usuarios.php');


$ModeloUsuarios= new Usuarios();
$ModeloUsuarios->validateSession();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Notas</title>
</head>
<body>
	
	<h1>Registrar Materias</h1>
	<form method="POST" action="../Controladores/add.php">
	Nombre <br>
	<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre Materia"><br><br>
	
    <input type="submit" value="Registrar materia">

</form>
</body>
</html>