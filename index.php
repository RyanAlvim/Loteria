<?php
$json = file_get_contents("https://lotericas.io/api/v1/jogos");
$req =json_decode($json);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loteria</title>
	<!-- Meta Tags -->
	<meta name="description" content="">
	<meta name="author" content="Garkey">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="img/favicon.ico" type="image/ico">
	<!-- CSS/JavaScript -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/script.js"></script>
	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
	<!-- Ícones -->
	<script src="https://kit.fontawesome.com/d16aa07be6.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="pagina">
		<div class="login">
			<form class="login-formulario">
                <h1 class="title">Loteria</h1>
				<?php
				$arr = array("megasena","lotofacil","timemania","quina");
                    foreach($arr as $key){
                        echo "<h2 class='title'><a href='$key.php'>$key</a></h2> \n";
                    }
                ?>
			</form>
		</div>
	</div>
</body>
</html>
