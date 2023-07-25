<?php include "../config/config.php" ?>

<!DOCTYPE html>
<html>
<head>

  <!-- CSS -->
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="../libs/css/reseat.css">
  <link rel="stylesheet" type="text/css" href="../libs/css/css.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- CSS -->

</head>

<body>
	<section class="mt-5">
		<div class="container">
			<div class="row justify-content-center text-center">
				
				 <form class="form-signin" action="verifica.php" method="POST">
      				<img class="mb-4" src="../midia/img/x-icon.png" alt="" width="50" height="50">
      				<h1 class="h3 mb-3 font-weight-normal">Acesso CPN</h1>
      				<label for="inputEmail" class="sr-only">Usuario</label>
      				<input name="user" type="text" id="inputEmail" class="form-control mb-3" placeholder="Usuario" required autofocus>

      				<label for="inputPassword" class="sr-only">Senha</label>
      				<input name="pass" type="password" id="inputPassword" class="form-control mb-3" placeholder="Senha" required>

      				<div class="checkbox mb-3 text-left">
	        			<label>
	          				<input type="checkbox" value="remember-me"> Lembrar-me
	        			</label>
      				</div>
      				<button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
      				<p class="mt-5 mb-3 text-muted">&copy; 2020-2022</p>
    			</form>

			</div>
		</div>
	</section>
</body>
</html>
