<?php
include_once 'config.inc.php';
session_start();
if(isset($_SESSION["usuario"])){
	//header("Location:../index.php");
}
echo "hola".$_SESSION["usuario"];
if(isset($_POST['agregar'])){

	$nombre = $_FILES['archivo']['name'];
	$tipo = $_FILES['archivo']['type'];
	$tamano = $_FILES['archivo']['size'];
	$ruta = $_FILES['archivo']['tmp_name'];
	$destino =$_SESSION["directorio"]."/".$nombre;

	if($nombre!=""){
		if(copy($ruta,$destino)){
		
		}
	}
}
?>


<html lang="en">
<head>
	<title>Kiosko Acatlan</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
</head>

<body>


	<section class="hero is-fullheight">
		<!-- Hero header: will stick at the top -->
		<div class="hero-head">
			<div class="columns has-text-centered ">
				<div class="column box is-10 is-offset-1">
					<nav class="level">
						<div class="level-item">
							<h1 class="title titulo">Kiosko de Impresiones Acatlan-Logo</h1>
						</div>
					</nav>
				</div>
			</div>
		</div>

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">

			<div class="container has-text-centered">

				<div class="columns">

					<div class="column is-half is-offset-one-quarter box">

						<div class="columns">
							<div class="column">
								<h2 class="title">DOCUMENTOS</h2>
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">
									<div class="control is-horizontal">

										<div class="control is-grouped">
											<p class="control is-expanded">
												<input class="input" type="text" placeholder="Name">
											</p>
											<p class="control is-expanded">
												<input class="input" type="file" name="archivo" >
											</p>
											<input type="submit" class="button is-primary" name="agregar" value="Agregar">
										</div>
									</div>
								</form>
							</div>

						</div>

						<div class="columns">
							<div class="column">
								<table class="table">
									<thead>
										<tr>
											<th>No°</th>
											<th>Nombre</th>
											<th>Ver</th>
											<th>Eliminar</th>
											<th>imprimir</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No°</th>
											<th>Nombre</th>
											<th>Ver</th>
											<th>Eliminar</th>
											<th>imprimir</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<th>1</th>
											<th>Test</th>
											<th><span class="icon"><i class="fa fa-eye"></i></span></th>
											<th><span class="icon"><i class="fa fa-trash"></i></span></th>
											<th><span class="icon"><i class="fa fa-print"></i></span></th>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<a href="./logout.php" class="button is-danger">Salir</a>
							</div>
						</div>

					</div>
				</div>

			</div>





		</section>



		<script src="../js/toggle.js"></script>
	</body>
	</html>
