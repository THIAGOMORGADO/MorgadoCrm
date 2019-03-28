<?php
if (isset($_POST["email"]) && empty($_POST["email"]) == false) {
	if (isset($_POST["senha"]) && empty($_POST["senha"]) == false) {
		
		$email = addslashes(($_POST['email']));
		$senha = md5($_POST['senha']);

		$dsn = "mysql:dbname=logg;host=localhost";
		$dbuser = "root";
		$dbpass = "";
		
		try {
		
			$pdo = new PDO($dsn, $dbuser, $dbpass);
				$sql = $pdo->query("SELECT * FROM user WHERE email = '$email' AND senha = '$senha'");
			header('Location: dashboard.php');
		} catch (PDOException $e) {
			echo"Login invalido";
			
		}
	}
}

?>