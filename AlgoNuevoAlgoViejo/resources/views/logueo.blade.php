<?php

 include_once("soporte.php");

  if ($auth->estaLogueado()) {
		header("Location:index.php");exit;
	}

	$errores = [];
	if ($_POST) {
		$errores = $validador->validarLogin($_POST, $db);
		if (count($errores) == 0) {
			// LOGUEAR
      		$auth->loguear($_POST["email"]);
			if (isset($_POST["recordame"])) {
				//Quiere que lo recuerde
				$auth->recordame($_POST["email"]);
			}
      		header("Location:perfil-usuario.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>Login</title>
  </head>
  <style>
    body{
      background-color: #F8EEBC;
      text-align: center;
    }
    form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 360px;
      margin: 60px auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
      font-family: 'Josefin Sans', sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;

    }




  </style>
  <body>

    <form class="form" action="login.php" method="post">
      <img src="images/logo60s.png" style="width:180px">
      <h1>Bienvenido/a</h1> <br><br>
      <span class="error"><//?php echo $errores['nombreDeUsuario']??''; ?></span> <br>
      Usuario <br> <input type="text" name="usuario" id="nombreDeUsuario" placeholder="Ingrese usuario"> <br>
      <span class="error"><//?php echo $errores['contraseña']??''; ?></span> <br>
      Contraseña  <br> <input type="password" id="contrasena" name="" placeholder="Ingrese contraseña"> <br>
      <input class=" btn btn-primary btn btn-outline-success" type="submit" name="" value="Login"> <br> <br></a>
      <a href="registro.php">¿No tienes cuenta? <br> <input class="btn btn-primary btn btn-outline-success" type="button" name="" value="Crear"></a>
    </form>
  </body>
</html>


<!-- <div class="jumbotron">
	<h1>Login</h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<ul class="errores">
		</?php foreach ($errores as $error) : ?>
			<li>
				</?=$error?>
			</li>
		</?php endforeach; ?>
		</ul>
		<form method="POST" action="login.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email" value="">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="contrasena" class="form-control" type="password" name="contrasena">
			</div>
			<div class="form-group">
				<label for="recordame">Recordame</label>
				<input type="Checkbox" name="recordame">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit">
			</div>
		</form>
	</div>
</div> -->
