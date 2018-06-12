<?php session_start();
include 'objet.class.php'; 

$mobject = new Objeto('mproperty1', 'mproperty2');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<p>El objeto se ha serializado y almacenado en una variable de sesión.</p>
	<?php
	$serialize_object = serialize($mobject);
	$_SESSION['object'] = $serialize_object;
	print_r($_SESSION);
	?>
	<br><br>
	<a href="page2.php">Go to page 2</a>
</body>
</html>