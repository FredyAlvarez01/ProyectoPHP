<?php 


require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');



$ModeloUsuarios= new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo=new Materias();
$Id=$_GET['Id'];
$informacionMaterias=$Modelo->getById($Id);



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Notas</title>
</head>
<body>
	
	<h1>Editar Materias</h1>
	<form method="POST" action="../Controladores/edit.php">
	<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<?php 
	if ($informacionMaterias!=null) {
		foreach ($informacionMaterias as $Info) {
		
	 ?>
	Nombre <br>
	<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre Materia" value="<?php echo $Info['MATERIA']; ?>"><br><br>
	
    <input type="submit" value="aditar materia">


    <?php 

}
}
     ?>


</form>
</body>
</html>