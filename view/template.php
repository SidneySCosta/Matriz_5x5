<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema 3</title>
	<link rel="stylesheet" href="src/css/bootstrap.css">
	<link rel="stylesheet" href="src/css/site.css">
</head>

<body>
	<div class="container">
		<nav class="nav nav-pills nav-fill">
			<a class="nav-link active" aria-current="page" href="index.php?view=main&controller=matrixController">Nova Matriz</a>
		</nav>
	</div>
	<br>
	<br>
	<div class="container">
		<?php
		if ($_GET) {
			$view = $_GET['view'];
			include $view . '.php';
		} else {
			include "main.php";
		}
		?>
	</div>
</body>

</html>