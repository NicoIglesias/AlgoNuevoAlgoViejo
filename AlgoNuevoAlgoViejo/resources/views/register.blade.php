
@include ('navbar')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>Registro</title>
  </head>
  <style media="screen">
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


    .error{
      color: red;
      font-size: 10px;
    }
  </style>
  <body>

    <form class="form" action="registro.php" method="post">
      <img src="images/logo60s.png" style="width:180px">
      <h1></h1> <br>
      Nombre completo: <br>
      <span class="error"></span> <br>
      <input type="text" name="nombre_completo" placeholder="Ingrese nombre completo" id="nombre_completo"> <br>
      <label>Elegí tu país:</label><br>
		  <select class="form-control" name="pais" id="paises">
			<option value="">Elegí un país</option>
			</select>
      <br><br><br>
      <div class="form-group" style="display: none;" id="provCont">
							<label>Elegí la provincia:</label>
							<select class="form-control" name="provincia" id="provincias">
							</select>
						</div>
            <br><br>
      Nombre de Usuario: <br>
      <span class="error"></span> <br>
      <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Ingrese nombre de usuario">
      Correo electronico: <br>
      <span class="error"></span> <br>
      <input type="email" id="email"name="email" placeholder="Ingrese email"><br>
      Contraseña: <br>
      <span class="error"></span> <br>
      <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña"> <br>
      Repita contraseña: <br>
      <span class="error"></span> <br>
      <input type="password" id="confirmarContra"name="confirmarContra" placeholder="Repita su contraseña"> <br>
      Imagen de perfil: <br><br>
      <input type="file" name="" value=""> <br><br>
      <input class="btn btn-primary btn btn-outline-success" type="submit" name="submit" value="Registrese">
      <a class="btn btn-primary btn btn-outline-danger" href ="index.php">Cancelar</a>
    </form>
    <script>
		var selectPaises = document.getElementById('paises');
		var selectProvincias = document.getElementById('provincias');
		var provCont = document.getElementById('provCont');
		var theImg = document.getElementById('flag');

		const fetchGenerico = (url, callback) => {
			fetch(url)
				.then(response => response.json())
				.then(data => callback(data))
				.catch(error => console.log(error));
		};

		function setPaises (info) {
			info.forEach(function (position) {
				selectPaises.innerHTML += `<option data-img="${position.flag}"> ${position.name}</option>`;
			});
		}

		function setProvincias (info) {
			info.forEach(function (position) {
				selectProvincias.innerHTML += '<option>' + position.state + '</option>';
			});
		}

		fetchGenerico('https://restcountries.eu/rest/v2/all', setPaises);

		selectPaises.addEventListener('change', function () {
			var theOptions = this.options;
			if (this.value === 'Argentina') {
				provCont.style.display = 'block';
				fetchGenerico('https://dev.digitalhouse.com/api/getProvincias', setProvincias);
			} else {
				provCont.style.display = 'none';
				selectProvincias.innerHTML = '';
			}
		});
	</script>

  </body>
</html>
