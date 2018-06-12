<?php session_start();
include_once 'objet.class.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página 2</title>
</head>
<body>
	
	<?php 
	if(isset($_SESSION) && !empty($_SESSION['object'])){
		$unserialize_object = unserialize($_SESSION['object']); 
		print_r($unserialize_object);

		echo '<br><br>propiedades del objeto: <br>';
		echo '<br>'.$unserialize_object->getProp1();
		echo '<br>'.$unserialize_object->getProp2();
	}else{
		echo '<p>No se ha podido recoger el objeto</p>';
	}
	?>
</body>
</html>