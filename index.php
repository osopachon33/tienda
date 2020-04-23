<?php
include "configs/config.php";
include "configs/funciones.php";

if(!isset($p)){
	$p = "principal";
}else{

	$p = $p;

}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>

	<link rel="stylesheet" href="css/estilo.css"/>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>

	<link rel="stylesheet" href="fontawesome/css/all.css"/>

	<script type="text/javascrip" src="bootstrap/js/bootstrap.js"></script>

	<script type="text/javascrip" src="fontawesome/js/all.js"></script>

	<script type="text/javascrip" src="js/jquery.js"></script>

	<script type="text/javascrip" src="js/app.js"></script>
	<title>
		
D'LON

	</title>
</head>
<body>

	<div class="header">
		D'LON
	</div>

	<div class="menu">
		<a href="?p=principal">Principal</a>
		<a href="?p=productos">Productos</a>
		<a href="?p=accesorios">Accesorios</a>
		<a href="?p=trajesdebano">Trajes de baño</a>
		<a href="?p=vestidos">Vestidos</a>
		<a href="?p=ofertas">Ofertas</a>
		<a href="?p=carrito">Carrito</a>
		<a href="?p=admin">Administrador</a>

		<?php
		if(isset($_SESSION['id_cliente'])){
		?>


		<a class="subir pull-right" href="?p=salir">Salir</a>
		<a class="subir pull-right" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>

		<?php
			}
		?>	
		
	</div>

	<div class="cuerpo">

		<?php
		if(file_exists("modulos/".$p.".php")){
			include "modulos/".$p.".php";
		}else{
			echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar<a/></i>";
		}

		?>

	</div>	

	<div class="footer">

		Copyright D'LON &copy; <?=date("Y")?>

	</div>
	


</body>
</html>