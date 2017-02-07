<?php
include_once 'config.inc.php';
	if(!empty($_POST)){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		if ($user!="") {
			$db = new Conect_MySql();
			$directorio="../usuarios/".$user;
			$sql="INSERT INTO USUARIO VALUES(NULL,'$user','$pass',0,'$directorio','$email')";
			mkdir($directorio,0777);
			$query=$db->execute($sql);
			header("Location:../index.php");
		}

	}

 ?>
<html lang="en">
<head>
	<title>Kiosko Acatlan</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
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
								<h2 class="title">Registrar</h2>
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<form action="registrar.php" method="post" >
									<label for="" class="label">Usuario</label>
									<p class="control has-icon">
										<input type="text" class="input" name="user" placeholder="Usuario" maxlength="9">
									</p>
									<label for="" class="label">Contraseña</label>
									<p class="control has-icon">
										<input type="text" class="input" name="pass" placeholder="Contraseña" maxlength="15">


									</p>
									<label for="" class="label">Correo</label>
									<p class="control has-icon">
										<input type="email" class="input" name="email" placeholder="Email" maxlength="30">

									</p>

									<input type="submit" name="login" value="Registrar" class="button is-primary"></input>
									<a href="../index.php" class="button is-danger">Cancelar</a>

								</form>

							</div>
						</div>
					</div>
				</div>

			</div>


		</div>



	</section>


</body>
</html>
