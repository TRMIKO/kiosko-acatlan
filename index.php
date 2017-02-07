<?php
include_once './php/config.inc.php';
	session_start();
	if(isset($_SESSION['usuario'])){
			header("location:./php/control.php");
	}
	if (!empty($_POST)) {
		$db=new Conect_Mysql();
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$error='';
		$sql="SELECT USER,DIRECTORIO FROM USUARIO WHERE USER='$user' AND PASS='$pass'";
		$query=$db->execute($sql);
		$rows=$query->num_rows;
		if($rows>0){
			$row=$query->fetch_assoc();

			$_SESSION['usuario']=$row['USER'];
			$_SESSION['directorio']=$row['DIRECTORIO'];

			header("location:./php/control.php");
		}
	}
 ?>
<head>
	<title>Kiosko Acatlan</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
								<h2 class="title">INICIAR SESION</h2>
							</div>
						</div>
						<div class="columns">
							<div class="column">
								<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<label for="" class="label">Usuario</label>
									<p class="control">
										<input type="text" class="input" name="user" placeholder="Usuario">
									</p>
									<label for="" class="label">Contraseña</label>
									<p class="control">
										<input type="password" class="input" name="pass" placeholder="Contraseña">
									</p>

									<input type="submit" name="login" value="Entrar" class="button is-primary"></input>
									<a href="./php/registrar.php" class="button is-warning">Registrar</a>
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
