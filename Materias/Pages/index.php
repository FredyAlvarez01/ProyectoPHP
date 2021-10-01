<?php

require_once ('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');

$ModeloUsuarios= new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo =new Materias();


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de notas</title>
</head>
<body>

		<h1>Materi</h1>
	<a href="add.php">registrar Materia</a><br><br>
	<table border="1"> 
	<tr>
	<th>Id</th>
	<th>Nombre</th>
	<th>Acciones</th>
	</tr>

<?php
	$Materias=$Modelo->get();
	if($Materias!=null){
		foreach ($Materias as $Materia) {
		
	?>



	<tr>
			<td><?php echo $Materia['ID_MATERIA'] ?></p></td>
			<td><?php echo $Materia['MATERIA'] ?></p></td>
		    
			<td>
				<a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'];?>" target="_blanck">Editar</a>
				<a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'];?>" target="_blanck">Eliminar</a>
			</td>
	</tr>

		<?php
	}

}

?>


</table>
	

</body>
</html>