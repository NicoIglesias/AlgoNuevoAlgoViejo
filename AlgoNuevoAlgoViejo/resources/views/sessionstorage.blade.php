!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Session Storage</title>
	</head>
	<body>
		<script>
			fetch('https://dev.digitalhouse.com/api/getProvincias')
				.then(function (resp) {
					return resp.text();
				})
				.then(function (data) {
					window.sessionStorage.setItem('data-fetch', data);
				});

				console.log('Lo que vino por FETCH ' + window.sessionStorage.getItem('data-fetch'));
		</script>
	</body>
</html>
