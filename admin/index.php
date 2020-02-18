<?php 

	session_start();
	require("database/connexion.php");
	
	$login = $password = "";

	$loginError = $passwordError = "";
	if (isset($_POST['connect'])) {
		
		$login =$_POST['login'];
		$password =$_POST['password'];
		

		if(empty($login))
		{
			$loginError = "Veuillez remplir le champ";
		}

		if(empty($password))
		{
			$passwordError = "veuillez Remplir Ce Champ";
		}

		$db = Database::connect();

		$statement = $db->prepare("SELECT * FROM admin WHERE login = :login AND password = :password");


			$statement->execute([
				'login'=> $_POST['login'],
				'password'=> $_POST['password']
			]);
			

			$admin = $statement->fetch();
			

			if ($admin) {
				$_SESSION['admin'] = $_SESSION['login'];
				header('location:accueil.php');
			} else
					{
						$loginError = "login non valide";
						$passwordError = "Mot de passe non valide";
					}
		
	}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Se connecter</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
	
</head>
<body>
	<div class="container">
		<div class="heading">
			<h2>Se Connecter</h2>
		</div>

		<div class="row">
			
			<div class="col-lg-10 col-lg-offset-1">
				<form id="form" method="POST" action="" role="form">
					<div class="row">
						<div class="col-md-6">
							<label for="login">login</label>
							<input type="text" name="login" id="login" class="form-control" placeholder="Votre pseudo" >
							<p class="comments"><?php echo $loginError; ?></p>
						
						</div>

						<div class="col-md-6">
							<label for="pwd">Mot de passe</label>
							<input type="password" name="password" id="pwd" class="form-control" placeholder="Votre mot de passe">
							<p class="comments"><?php echo $passwordError; ?></p>
						</div>
						

						<center>
							<button type="submit" class="btn btn-success " name="connect">SE CONNECTER</button>
							<button type="reset" class="btn btn-danger">ANNULER</button>
						</center>

						
					</div>
				</form>
			</div>

		</div>

	</div>
	


    <script src="../node_modules/jquery/dist/jquery.min.js" ></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>